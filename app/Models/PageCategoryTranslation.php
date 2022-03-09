<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCategoryTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'lang', 'page_category_id'];

}
