<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['image','title_en','title_az','desc_en','desc_az','work_tag_id'];

    public function tags()
    {
        return $this->belongsTo('App\WorkTag','id');
    }
}
