<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Post extends Model
{
    protected $fillable = ['category_id','image','slug','status','meta_keyword','title_en','title_az','text_en','text_az'];

    public function tags()
    {
        return $this->hasMany(PostTag::class);
    }

    public function getCreatedAtAttribute($date)
    {
        Date::setLocale(app()->getLocale());
        return Date::createFromFormat('Y-m-d H:i:s', $date)->format('D M d, Y');
    }
}
