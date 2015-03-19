@extends('layout.master')


@section('content')
<div class="row" id="home">
	<div class="col-md-5">
		<h3>{{ isset($pageTitle) ? $pageTitle : '' }}</h3>
		<div id="description">
			<p>Sorry, the page you are looking for is not available</p>
			<a class="btn btn-primary" href="{{ URL::route('home')}}">Back to Home</a>
		</div><!-- #description -->
	</div>
</div>
@stop