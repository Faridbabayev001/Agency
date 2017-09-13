<?php

namespace App\Http\Controllers\Backend;

use App\Social;
use App\Tag;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function add_data()
    {
        $tags = Tag::all();
        $teams = Team::all();
        return view('backend.add',compact('tags','teams'));
    }

    public function set_locale($locale)
    {
        if (array_key_exists($locale, Config::get('languages'))) {
            Session::put('applocale', $locale);
        }
        return back();
    }
}
