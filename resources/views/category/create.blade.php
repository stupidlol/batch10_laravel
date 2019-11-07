@extends('template')
@section('content')



<div class="container col-md-8 mx-auto py-5" >
	<h1>Category Create Form</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 					


	<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label><input type="text" name="name" class="form-control" required="required">			
		</div>
		





		<div class="form-group">
			<input type="submit" name="btnsubmit" value="save" class="from-control">
		</div>

	</form>
	

</div>


@endsection