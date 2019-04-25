<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Page;
class SiteController extends Controller
{
    
    public function index()
    {
    	$services=Service::service_index();
    	return view('main_site.index',compact('services'));
    }

    public function service_single(Request $request)
    {
    	$id=$request['id'];
    	$service=Service::service_show($id);
    	return view ('main_site.service_single',compact('service'));
    }


       public function get_page(Request $request)
    {
        $link='/'.$request['link'];
        $page=Page::page_show_by_name($link);
        return view ('main_site.why_choose_us',compact('page'));
    }
}
