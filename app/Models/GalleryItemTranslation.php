<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryItemTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['gallery_id','galery_item_id', 'lang'];
}
