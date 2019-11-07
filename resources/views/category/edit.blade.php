@extends('template')
@section('content')

<div class="container" style="margin-top:100px;">
	<div class="col-lg-8 col-md-10 mx-auto">
		<h2>Category Edit Form</h2>
		<form method="post" action="{{route('category.update',$category->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$category->name}}">
			</div>
			<div class="form-group">
				<input type="submit" name="btn" value="save">
			</div>
		</form>
	</div>
</div>
@endsection