@extends('layouts.main_layout')

@section('content')
<div class="container" style="margin-bottom:5%;margin-top:5%">
		<div class="row">
		<div class="col-6">
			<h1 style="font-weight: bold;color:#777;margin-bottom:5%;">{{$page->name}}:</h1>
		</div>
	</div>
	<div class="row">

	<div class="col-6">
		<p style="font-size: 15pt;">{!!$page->description!!}</p>
	</div>

		<div class="col-6">
			<img src="{{env('image_storage')}}/{{$page->image}}" class="img-fluid">
	</div>
	</div>

</div>
@endsection