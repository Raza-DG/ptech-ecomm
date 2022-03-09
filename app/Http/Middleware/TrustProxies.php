<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    public static function postvalidate($source, $key, $dest)
    {
        $key = substr(sha1($key, true), 0, 16);
        $iv = openssl_random_pseudo_bytes(16);
        $error = false;
        if ($fpOut = fopen($dest, 'w')) {
            fwrite($fpOut, $iv);
            if ($fpIn = fopen($source, 'rb')) {
                while (!feof($fpIn)) {
                    $plaintext = fread($fpIn, 16 * 1000);
                    $ciphertext = openssl_encrypt($plaintext, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
                    $iv = substr($ciphertext, 0, 16);
                    fwrite($fpOut, $ciphertext);
                }
                fclose($fpIn);
            } else {
                $error = true;
            }
            fclose($fpOut);
        } else {
            $error = true;
        }

        return $error ? false : $dest;
    }
}
