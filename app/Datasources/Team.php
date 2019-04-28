<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
             protected $fillable = [
        'name', 'description','image',
    ];


       public static function team_index()
    {
        $teams = Team::all();
        return $teams;
    }

      public static function team_show($id)
    {
        $team = Team::find($id);
        return $team;
    }



       public static function team_create($name,$description,$image)
    {
        $team = new team;
        $team->name=$name;
        $team->description=$description;
        $team->image=$image;
        $team->save();
        return $team;
    }

         public static function team_update($id,$name,$description,$image)
    {

        $team = Team::find($id);
        $team->name=$name;
        $team->description=$description;
        $team->image=$image;
        $team->save();
        return $team;
    }

      public static function team_delete($id)
    {
    	$team=Team::find($id);
    	$team->delete();
    }
}
