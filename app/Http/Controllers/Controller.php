<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $setting = Setting::findOrFail('1');
        $name = "name_".app()->getLocale();
        $title = "title_".app()->getLocale();
        $desc = "desc_".app()->getLocale();
        $text = "text_".app()->getLocale();
        $address = "address_".app()->getLocale();
        $position = "position_".app()->getLocale();
        $upperCaseLocale = strtoupper(app()->getLocale());
        $language = app()->getLocale().'_'.$upperCaseLocale;
        View::share('setting',$setting);
        View::share('name',$name);
        View::share('title',$title);
        View::share('desc',$desc);
        View::share('text',$text);
        View::share('address',$address);
        View::share('position',$position);
        View::share('language',$language);
    }
}
