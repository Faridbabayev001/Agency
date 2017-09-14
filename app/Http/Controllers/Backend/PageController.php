<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Post;
use App\Tag;
use App\Team;
use App\Work;
use App\WorkTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(8);
        $teams = Team::orderBy('created_at','desc')->paginate(8);
        $works = Work::orderBy('created_at','desc')->paginate(8);
        return view('backend.index',compact('posts','teams','works'));
    }

    public function add_data()
    {
        $tags = Tag::all();
        $teams = Team::all();
        $categories = Category::all();
        $work_tags = WorkTag::all();
        return view('backend.add',compact('tags','teams','categories','work_tags'));
    }

}
