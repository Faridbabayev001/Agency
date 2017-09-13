<?php

namespace App\Http\Controllers\Frontend;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('frontend.index',compact('teams'));
    }
}
