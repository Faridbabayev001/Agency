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
        $upperCaseLocale = strtoupper(app()->getLocale());
        $language = app()->getLocale().'_'.$upperCaseLocale;
        View::share('setting',$setting);
        View::share('language',$language);
    }
}
