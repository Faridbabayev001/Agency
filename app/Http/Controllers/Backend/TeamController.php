<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\TeamRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app('App\Http\Controllers\Backend\PageController')->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return app('App\Http\Controllers\Backend\PageController')->add_data();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $slug = str_slug($request->name_en);
        $image_name =  rand(1,99999).'-'.$slug.'.'.$request->file('avatar')->getClientOriginalExtension();
        $request->file('avatar')->move(public_path('team'),$image_name);
        $data['avatar'] = $image_name;
        $data['name_en'] = $request->name_en;
        $data['name_az'] = $request->name_az;
        $data['position_en'] = $request->position_en;
        $data['position_az'] = $request->position_az;
        Team::create($data);
        $request->session()->flash('add_team', 'Team added');
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
        $team = Team::findOrFail($id);
        return view('backend.team.edit_team',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamUpdateRequest $request, $id)
    {
        $slug = str_slug($request->name_en);
        $team = Team::findOrFail($id);
        $image_name = $team->avatar;
        if ($request->hasFile('image'))
        {
            unlink('team/'.$team->avatar);
            $image_name =  rand(1,99999).'-'.$slug.'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(public_path('team'),$image_name);
        }
        $team->avatar = $image_name;
        $team->name_en = $request->name_en;
        $team->name_az = $request->name_az;
        $team->position_en = $request->position_en;
        $team->position_az = $request->position_az;
        $team->update();
        $request->session()->flash('update_team','Team edited');
        return back();
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
