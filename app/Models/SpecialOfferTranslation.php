<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOfferTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'lang', 'special_offer_id'];
}
