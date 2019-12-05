<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<title>Muff</title>
</head>
<body>
	<div class="container">
		<ul>
			<li>
				<a href="{{url('/')}}">Home</a>
				<a href="{{url('/about')}}">About</a>
				<a href="{{url('/blog')}}">Blog</a>
				<a href="{{url('/blog/create')}}">Create Blog </a>
			</li>
		</ul>
		@yield('content')
	</div>



</body>
</html>