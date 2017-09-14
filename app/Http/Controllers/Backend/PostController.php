<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\PostRequest;
use App\Post;
use App\PostTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return app('App\Http\Controllers\Backend\PageController')->add_data();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $slug = str_slug($request->title_en);
        $image_name =  rand(1,99999).'-'.$slug.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('post'),$image_name);
        $data['image'] = $image_name;
        $data['slug'] = $slug;
        $data['title_en'] = $request->title_en;
        $data['category_id'] = $request->category_id;
        $data['title_az'] = $request->title_az;
        $data['text_en'] = $request->text_en;
        $data['text_az'] = $request->text_az;
        $data['status'] = $request->status;
        $data['meta_keyword'] = $request->meta_keyword;
        $post = Post::create($data);
        foreach ($request->tags as $tag)
        {
            PostTag::create(['post_id' => $post->id,'tag_id' => $tag]);
        }
        $request->session()->flash('add_post','Post added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
