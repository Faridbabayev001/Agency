<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Post;
use App\Question;
use App\Tag;
use App\Team;
use App\Work;
use App\WorkTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(8);
        $teams = Team::orderBy('created_at','desc')->paginate(8);
        $works = Work::orderBy('created_at','desc')->paginate(8);
        $faqs = Question::orderBy('created_at','desc')->paginate(8);
        return view('backend.index',compact('posts','teams','works','faqs'));
    }

    public function add_data()
    {
        $tags = Tag::all();
        $teams = Team::all();
        $categories = Category::all();
        $work_tags = WorkTag::all();
        return view('backend.add',compact('tags','teams','categories','work_tags'));
    }

    public function get_language($folder,$file)
    {
        $languages = File::getRequire(base_path().'/resources/lang/'.$folder.'/'.$file.'.php');
        return view('backend.language',compact('languages','folder','file'));
    }

    public function set_language($folder,$file,Request $request)
    {
        $request->request->remove('_token');
        $text = '<?php
        
        ';
        $text .= 'return [
        ';
        foreach ($request->all() as $key => $value) {
            $text.= "'$key' => '$value',
            ";
        }
        $text .= "];";
        file_put_contents(base_path().'/resources/lang/'.$folder.'/'.$file.'.php',$text);
        $request->session()->flash('update_language','Language updated');
        return back();
    }

}
