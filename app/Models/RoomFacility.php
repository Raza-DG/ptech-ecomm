<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    use HasFactory;

    protected $with = ['roomfacility_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $roomfacility_translation = $this->roomfacility_translations->where('lang', $lang)->first();
        return $roomfacility_translation != null ? $roomfacility_translation->$field : $this->$field;
    }

    public function roomfacility_translations(){
        return $this->hasMany(RoomFacilityTranslation::class);
    }


    public function room()
    {
       return $this->belongsTo(Room::class);
    }
}
