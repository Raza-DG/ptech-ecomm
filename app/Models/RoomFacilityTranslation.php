<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFacilityTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name','decription' ,'lang', 'room_facility_id'];

    public function roomfacility(){
        return $this->belongsTo(RoomFacility::class);
    }
}
