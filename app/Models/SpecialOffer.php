<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App;

class SpecialOffer extends Model
{
    use HasFactory;
    use Loggable;

    protected $with = ['special_offer_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $special_offer_translation = $this->special_offer_translations->where('lang', $lang)->first();
        return $special_offer_translation != null ? $special_offer_translation->$field : $this->$field;
    }

    public function special_offer_translations(){
      return $this->hasMany(SpecialOfferTranslation::class);
    }
}
