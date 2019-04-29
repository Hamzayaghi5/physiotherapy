<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::testimonial_index();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            $testimonial=$request['testimonial'];
            $type=$request['type'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename);
            $img_name=str_replace('public/', '', $path_img);
           $testimonial1= Testimonial::testimonial_create($name,$testimonial,$img_name,$type);
            return $testimonial1;
            // return redirect('/admin/testimonial/index');
        }   

            return Redirect::back()->withErrors('The image input must not be empty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::testimonial_show($id);
        return view('admin.testimonial.update',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimonial $testimonial)
    {
            $name=$request['name'];
            $testimonial=$request['testimonial'];
            $type=$request['type'];
    if($request->hasFile('img_name'))
        {  
            $file=$request->file('img_name');                  
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename.time());
            $img_name=str_replace('public/', '', $path_img);
            Testimonial::testimonial_update($id,$name,$description,$img_name,$type);

            return redirect('/admin/testimonial/index');
        }   

        $testimonial=Testimonial::testimonial_show($id);
          Testimonial::testimonial_update($id,$name,$description,$testimonial->image,$type);
           return redirect('/admin/testimonial/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
     public function delete(Request $request)
    {
        $id=$request['id'];
        $testimonial=Testimonial::testimonial_show($id);
        Storage::delete('public'.$testimonial->image);
        $testimonial->delete();
        return redirect('/admin/testimonial/index');
    }
}
