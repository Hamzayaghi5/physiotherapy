<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
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
}
