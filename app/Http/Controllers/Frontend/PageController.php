<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use App\Setting;
use App\Team;
use App\Work;
use App\WorkTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $work_tags = WorkTag::all();
        $works = Work::all();
        $posts = Post::orderBy('created_at','desc')->limit(3)->get();
        return view('frontend.index',compact('teams','work_tags','works','posts'));
    }
}
