<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $with = ['room_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $room_translation = $this->room_translations->where('lang', $lang)->first();
        return $room_translation != null ? $room_translation->$field : $this->$field;
    }

    public function room_translations(){
        return $this->hasMany(RoomTranslation::class);
    }

    public function roomfacilities()
    {
       return $this->hasMany(RoomFacility::class);
    }

    public function pagecategory()
    {
        return $this->belongsTo(PageCategory::class,'page_category_id','id');
    }

    public function menuroom()
    {
        return $this->hasOne(Menu::class);
    }

}
