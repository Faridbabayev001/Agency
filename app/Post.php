<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_id','slug','status','meta_keyword','title_en','title_az','text_en','text_az'];
}
