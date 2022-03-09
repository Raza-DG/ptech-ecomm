<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App;

class Gallery extends Model
{
    use HasFactory;
    use Loggable;

    protected $with = ['gallery_translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? App::getLocale() : $lang;
        $gallery_translation = $this->gallery_translations->where('lang', $lang)->first();
        return $gallery_translation != null ? $gallery_translation->$field : $this->$field;
    }

    public function gallery_translations()
    {
        return $this->hasMany(GalleryTranslation::class);
    }


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function galleryitems()
    {
        return $this->hasMany(GalleryItem::class, 'gallery_id','id');
    }
}
