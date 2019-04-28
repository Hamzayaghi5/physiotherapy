<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::team_index();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $name=$request['name'];
            $description=$request['description'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename.time());
            $img_name=str_replace('public/', '', $path_img);
            Team::team_create($name,$description,$img_name);

            return redirect('/admin/team/index');
        }   

            return Redirect::back()->withErrors('The image input must not be empty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=Team::team_show($id);
        return view('admin.team.update',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
         $id=$request['id'];
            $name=$request['name'];
            $description=$request['description'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename.time());
            $img_name=str_replace('public/', '', $path_img);
            Team::team_update($id,$name,$description,$img_name);

            return redirect('/admin/team/index');
        }   

        $team=Team::team_show($id);
          Team::team_update($id,$name,$description,$team->image);
           return redirect('/admin/team/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
     public function delete(Request $request)
    {
        $id=$request['id'];
        $team=Team::team_show($id);
        Storage::delete('public'.$team->image);
        $team->delete();
        return redirect('/admin/team/index');
    }
}
