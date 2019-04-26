<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
       protected $fillable = [
        'name','description','image','link',
    ];



      public static function page_index()
    {
        $page = Page::All();
        return $page;
    }


      public static function who_we_are()
    {
        $page = Page::where('id','<','4')->get();
        return $page;
    }

       public static function what_we_treat()
    {
        $page = Page::where('id','>','3')->get();
        return $page;
    }



      public static function page_show($id)
    {
        $page = Page::find($id);
        return $page;
    }

      public static function page_show_by_name($link)
    {
        $page = Page::where('link',$link)->first();
        return $page;
    }




       public static function page_create($name,$description,$image,$link)
    {
        $page = new page;
        $page->name=$name;
        $page->description=$description;
        $page->image=$image;
        $page->link=$link;
        $page->save();
        return $page;
    }

         public static function page_update($id,$name,$description,$image,$link)
    {

        $page = Page::find($id);
        $page->name=$name;
        $page->description=$description;
        $page->image=$image;
        $page->link=$link;
        $page->save();
        return $page;
    }

      public static function page_delete($id)
    {
    	$page=Page::find($id);
    	$page->delete();
    }
}
