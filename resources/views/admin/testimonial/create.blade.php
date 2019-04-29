@extends('layouts.admin_layout')
@section('content')


@if($errors->any())
<div class="alert alert-danger col-lg-6">
  {{$errors->first()}}
</div>           
@endif

	<div class="col-6">
<form  class="container" action='/admin/{{Request::segment(2)}}/create' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}} name</label>
		<input name="name" class="form-control"  id="comment" required>
		
	</div>

				<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}}  testimonial</label>
		<textarea name="testimonial" class="form-control summernote" rows="5" id="comment" required></textarea>
		
	</div>


	<select class="browser-default custom-select" name="type">
  <option value='image'>image</option>
  <option value='video'>video</option>
</select>


	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img_name" enctype="multipart/form-data" required multiple>
	<br><br>
	<button  type="submit" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Create {{Request::segment(2)}}</button>
</form>
	</div>
@endsection