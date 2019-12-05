@extends('layouts.app')


@section('content')
<h1>Blog Post</h1>

<img src="{{asset($blog_post->image)}}" width="200px" />
<h4>{{$blog_post->title}}</h4>
<p>{{$blog_post->body}}</p>
<a href="{{url("blog/$blog_post->id/edit")}}" class="btn btn-sm btn-warning">Edit</a>

<form action="{{url("blog/$blog_post->id/")}}" method="POST" style="display:inline">
	@csrf
	@method("DELETE")
	<button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
<p></p>
@endsection