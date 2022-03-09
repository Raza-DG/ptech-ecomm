<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'lang', 'gallery_id'];
}
