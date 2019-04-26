@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/{{Request::segment(2)}}/update/{{$page->id}}' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}} Title</label>
		<input value="{{$page->name}}" name="name" class="form-control"  id="comment" required>
		
	</div>

		

				<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}} Description</label>
		<textarea name="description" class="form-control summernote" rows="5" id="comment" required>{{$page->description}}</textarea>
		
	</div>


		<div class="form-group">
		<label for="exampleInputEmail1">{{Request::segment(2)}} Title</label>
		<input value="{{$page->link}}" name="link" class="form-control"  id="comment" required>
		
	</div>

	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img_name" enctype="multipart/form-data">
	<br><br>
	<button  type="submit" class="btn btn-primary"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Update {{Request::segment(2)}}</button>
</form>
	</div>
@endsection