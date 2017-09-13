<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Team extends Model
{
    protected $fillable = ['avatar','name_en','name_az','position_en','position_az'];

    public function socials()
    {
        return $this->hasMany(Social::class);
    }
}
