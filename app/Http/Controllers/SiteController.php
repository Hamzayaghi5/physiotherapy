<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Page;
use App\Team;
use App\Testimonial;
class SiteController extends Controller
{
    
    public function index()
    {
        $teams=Team::team_index();
    	$services=Service::service_index();
    	return view('main_site.index',compact('services','teams'));
    }

    public function service_single(Request $request)
    {
    	$id=$request['id'];
    	$service=Service::service_show($id);
    	return view ('main_site.service_single',compact('service'));
    }


       public function team_single(Request $request)
    {
        $id=$request['id'];
        $team=Team::team_show($id);
        return view ('main_site.team_single',compact('team'));
    }


       public function get_page(Request $request)
    {
        $link='/'.$request['link'];
        $page=Page::page_show_by_name($link);
        return view ('main_site.why_choose_us',compact('page'));
    }

    public function get_testimonials()
    {
        $testimonial=Testimonial::get_testimonials();
        return view('main_site.testimonials',compact('testimonials'));
    }
}
