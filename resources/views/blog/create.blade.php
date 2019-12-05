@extends('layouts.app')

@section('content')
	<form action="{{url('/blog')}}" method="POST" enctype="multipart/form-data">
		@csrf


		@if(session('success'))
			<div class="alert alert-success">
				{{session('success')}}
			</div>
		@endif

		@if($errors->any())
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{$error}}
				</div>
			@endforeach
		@endif
		<input type="text" name="title" class="form-control @error('title'){{'alert-danger'}}@enderror" placeholder="Enter title" value="{{old('title')}}"><br>
		<textarea name="body" class="form-control" placeholder="Enter your post content">{{old('body')}}</textarea> <br>
		<input type="file" name="image">
		<button type="submit" class="btn btn-primary" >Submit</button>
	</form>
@endsection


