<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'meta_title_en',
        'meta_title_az',
        'meta_desc_en',
        'meta_desc_az',
        'address_en',
        'address_az',
        'lat',
        'lng',
        'email',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'contact',
    ];
}
