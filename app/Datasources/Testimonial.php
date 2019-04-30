<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
                protected $fillable = [
        'name','testimonial','url','type',
    ];


       public static function testimonial_index()
    {
        $testimonials = Testimonial::all();
        return $testimonials;
    }

      public static function testimonial_show($id)
    {
        $testimonial = Testimonial::find($id);
        return $testimonial;
    }



       public static function testimonial_create($name,$testimonial_text,$url,$type)
    {
        $testimonial = new testimonial;
        $testimonial->name=$name;
        $testimonial->testimonial=$testimonial_text;
        $testimonial->url=$url;
        $testimonial->type=$type;
        $testimonial->save();
        return $testimonial;
    }

         public static function testimonial_update($id,$name,$testimonial_text,$url,$type)
    {

        $testimonial = Testimonial::find($id);
        $testimonial->name=$name;
        $testimonial->testimonial=$testimonial_text;
        $testimonial->url=$url;
        $testimonial->type=$type;
        $testimonial->save();
        return $testimonial;
    }

      public static function testimonial_delete($id)
    {
    	$testimonial=Testimonial::find($id);
    	$testimonial->delete();
    }
}
