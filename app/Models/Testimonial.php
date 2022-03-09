<?php

namespace App\Models;

use App;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    use Loggable;

    protected $with = ['testimonial_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $testimonial_translation = $this->testimonial_translations->where('lang', $lang)->first();
        return $testimonial_translation != null ? $testimonial_translation->$field : $this->$field;
    }

    public function testimonial_translations(){
      return $this->hasMany(TestimonialTranslation::class);
    }
}
