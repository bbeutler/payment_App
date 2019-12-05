@extends('layouts.app')

@section('content')
<h1>Homepage</h1>
@component('component.alert')
	@slot('type')
	warning
	@endslot
	<h5>Success</h5>
@endcomponent

@endsection