<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App;

class GalleryItem extends Model
{
    use HasFactory;
    use Loggable;

    protected $with = ['gallery_item_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $gallery_item_translation = $this->gallery_item_translations->where('lang', $lang)->first();
        return $gallery_item_translation != null ? $gallery_item_translation->$field : $this->$field;
    }

    public function gallery_item_translations(){
      return $this->hasMany(GalleryItemTranslation::class,'gallery_item_id','id');
    }

    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
