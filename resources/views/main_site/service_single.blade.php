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

            <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
                <div class="content-sing-w3layouts px-lg-5">
                	
                	@foreach ($service->images as $image)
                	<div class="row">
                	<img class="img-fluid img-responsive mx-auto d-block" src="{{env('image_storage')}}/{{$image->image}}" alt="">
                	</div>
                	@endforeach
                    
                    <h4>what is {{$service->title}}:</h4>
                    <p>{{$service->main_description}}</p>

                </div>
            </div>
        </div>


    </section>

@endsection