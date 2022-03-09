<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lang', 'testimonial_id','designation','description','image'];

    public function testimonial(){
        return $this->belongsTo(Testimonial::class);
    }
}
