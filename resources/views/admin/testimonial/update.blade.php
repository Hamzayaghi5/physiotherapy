@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/{{Request::segment(2)}}/update/{{$testimonial->id}}' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}} name</label>
		<input name="name" class="form-control"  id="comment" required value="{{$testimonial->name}}">
		
	</div>

				<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}}  testimonial</label>
		<textarea name="testimonial" class="form-control" rows="5" id="comment" required>{{$testimonial->testimonial}}</textarea>
		
	</div>


	<select class="browser-default custom-select" name="media_type">
		  <option selected>Select your type</option>
  <option value='image'>image</option>
  <option value='video'>video</option>
</select>

	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img_name" enctype="multipart/form-data">
	<br><br>
	<button  type="submit" class="btn btn-primary"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Update {{Request::segment(2)}}</button>
</form>
	</div>
@endsection