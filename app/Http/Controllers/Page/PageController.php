<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::page_index();
        return view('admin.page.index',compact('pages'));
    }

      public function who_we_are()
    {
        $pages=Page::who_we_are();
        return compact('pages');
    }


    public function what_we_treat()
    {
        $pages=Page::what_we_treat();
        return compact('pages');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            $link=$request['link'];
            $description=$request['description'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename.time());
            $img_name=str_replace('public/', '', $path_img);
            Page::page_create($name,$description,$img_name,$link);

            return redirect('/admin/page/index');
        }   

            return Redirect::back()->withErrors('The image input must not be empty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $page=Page::page_show($id);
          return view('admin.page.update',compact('page'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
            $id=$request['id'];
            $name=$request['name'];
            $link=$request['link'];
            $description=$request['description'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename.time());
            $img_name=str_replace('public/', '', $path_img);
            Page::page_update($id,$name,$description,$img_name,$link);

            return redirect('/admin/page/index');
        }   

        $page=Page::page_show($id);
          Page::page_update($id,$name,$description,$page->image,$link);
           return redirect('/admin/page/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id=$request['id'];
        $page=Page::page_show($id);
        Storage::delete('public'.$page->image);
        $page->delete();
        return redirect('/admin/page/index');
    }
}
