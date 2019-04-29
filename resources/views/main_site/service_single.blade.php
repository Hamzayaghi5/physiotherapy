@extends('layouts.main_layout')

@section('content')
	  <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">

        <div class="container py-md-4 ">
            <div class="header-w3layouts text-center mb-5">
                <h3 class="title-w3pvt mb-5">{{$service->title}}</h3>
            </div>

         
                	
                	@foreach ($service->images as $image)
                	<div class="row">
                	<img class="img-fluid img-responsive mx-auto d-block" src="{{env('image_storage')}}/{{$image->image}}" alt="">
                	</div>
                	@endforeach
                    <div class="row col-lg">
                        
                 
                    <h4>what is {{$service->title}}:</h4>
                    <p>{!!$service->main_description!!}</p>
   </div>
          
        </div>


    </section>

@endsection