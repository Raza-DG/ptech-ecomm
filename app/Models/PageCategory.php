<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App;

class PageCategory extends Model
{
    use HasFactory;
    use Loggable;

    protected $with = ['pagecategory_translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? App::getLocale() : $lang;
        $pagecategory_translations = $this->pagecategory_translations->where('lang', $lang)->first();
        return $pagecategory_translations != null ? $pagecategory_translations->$field : $this->$field;
    }

    public function pagecategory_translations()
    {
        return $this->hasMany(PageCategoryTranslation::class,'page_category_id','id');
    }


    public function rooms()
    {
        return $this->hasMany(Room::class,'page_category_id','id');
    }
}
