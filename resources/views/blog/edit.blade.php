@extends('layouts.app')

@section('content')
	<form action="{{url('blog', $blog_post->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

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
		<img src="{{asset($blog_post->image)}}" width="200"> <hr>
		<input type="text" name="title" class="form-control @error('title'){{'alert-danger'}}@enderror" placeholder="Enter title" value="{{$blog_post->title}}"><br>
		<textarea name="body" class="form-control" placeholder="Enter your post content">{{$blog_post->body}}</textarea> <br>
		<input type="file" name="image">
		<button type="submit" class="btn btn-primary" >Submit</button>
	</form>
@endsection


