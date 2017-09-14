<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\WorkRequest;
use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
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
    public function store(WorkRequest $request)
    {
        $slug = str_slug($request->title_en);
        $image_name =  rand(1,99999).'-'.$slug.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('work'),$image_name);
        $data['image'] = $image_name;
        $data['title_en'] = $request->title_en;
        $data['work_tag_id'] = $request->work_tag_id;
        $data['title_az'] = $request->title_az;
        $data['desc_en'] = $request->desc_en;
        $data['desc_az'] = $request->desc_az;
        Work::create($data);
        $request->session()->flash('add_work','Work added');
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
