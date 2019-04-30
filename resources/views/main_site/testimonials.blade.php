@extends('layouts.main_layout')

@section('content')
<div class="container" style="margin-bottom:5%;margin-top:15%">
    
    
        <div class="row">
        <div class="col-6">
            <h1 style="font-weight: bold;color:#777;margin-bottom:5%;">Testimonials</h1>
        </div>
    </div>
    @foreach ($testimonials as $testimonial)
    <div class="row">
    <div class="col-6">
        @if ($testimonial->type=="image")
            <img src="{{env('image_storage')}}/{{$testimonial->url}}" class="img-fluid">
        @else
        <div class="embed-responsive embed-responsive-4by3">
            <video width="640" height="480" controls>
                <source src="{{env('image_storage')}}/{{$testimonial->url}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        @endif
    </div>

    <div class="col-6">
        <p style="font-size: 15pt;">{{$testimonial->testimonial}}</p>
    </div>

    
    </div>
     <div class="row">
      <div class="col-6">
        <p style="font-size: 15pt;">{{$testimonial->name}}</p>
    </div>
</div>
    @endforeach

</div>
@endsection