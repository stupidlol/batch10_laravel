@extends('template')
@section('content')



<div class="container col-md-8 mx-auto py-5" >
	<h1>Post Create Form</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 					


	<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Title</label><input type="text" name="title" class="form-control">			
		</div>
		<div class="form-group">
			<label>Content</label><textarea class="form-control" name="content"></textarea>
		</div>
		<div class="form-group">
			<label>Photo</label>
				<span class="text-danger">[supported file types:jpeg,png,jpg]</span>
			<input type="file" name="photo" class="form-control">
		</div>

		<div class="form-group">
			<label>Categories</label>
				<select name="category" class="form-control">
					<option value="">Choose Category</option>

					{--accept data and loop--}
					@foreach($categories as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
		</div>

		<div class="form-group">
			<input type="submit" name="btnsubmit" value="save" class="from-control">
		</div>

	</form>
	

</div>


@endsection