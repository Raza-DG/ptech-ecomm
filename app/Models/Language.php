<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use Illuminate\Database\Eloquent\Builder;
use Route;

class Language extends Model
{
  //
  protected static function boot()
  {
    parent::boot();
    if (Route::currentRouteName() != "languages.index") {
        static::addGlobalScope('status', function (Builder $builder) {
            $builder->where('status', 1);
        });
    }
  }
}
