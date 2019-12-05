@extends('layouts.app')


@section('content')
<h1>Blog Posts</h1>

@foreach($posts as $post)
<img src="{{asset($post->image)}}" width="200px" />
<h4>{{$post->title}}</h4>
<p>{{str_limit($post->body,50)}}</p>

<p>{{$post->created_at->format('D M Y')}}</p>
<a href="{{url("blog/$post->slug")}}" class="btn btn-sm btn-primary">Read more</a>
<p></p>

@endforeach
@endsection