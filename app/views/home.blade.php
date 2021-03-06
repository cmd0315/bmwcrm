@extends('layout.master')


@section('content')
<div class="row" id="home">
	<div class="col-md-5">
		<h3>DISCOVER THE LUXURY OF THE BMW LIFESTYLE.</h3>
		<div id="description">
			<p>To help us provide vehicles and services that are aligned with your vision, lifestyle, and goals, we would like to invite you to answer a short questionnaire.</p>
			<p>The 10-item questionnaire will ask for your vehicle preferences, as well as some personal details to help us understand your answers in relation to who you are.</p>

			<p> Rest assured that all the information you share will be kept confidential and used only to give you the best of sheer driving pleasure.</p>

			<p>To answer the questionnaire and avail of your complimentary biannual subscription to the BMW Magazine, kindly click START.</p>
		</div><!-- #description -->
		<div id="form">
			{{ Form::open(['class' => 'form-horizontal', 'route' => ['registrations.store']]) }}
				<div class="form-group">
					<div class="col-md-12">
						<div class="checkbox">
							<input type="checkbox" name="accept_terms" id="accept_terms" value="1">
							<label for="accept_terms">I have read this Agreement and agree to the Terms & Conditions</label><br>
							@if($errors->has('accept_terms'))
								<p class="bg-danger">{{ $errors->first('accept_terms') }}</p>
							@endif
						</div>
					</div>
				  </div>
				  <div class="form-group">
				  	<div class="col-md-12">
				  		<button type="submit" class="btn btn-primary">Start</button>
				  	</div>
				</div>
			{{ Form::close() }}<!-- .horizontal -->
		</div><!-- #form -->
	</div>
</div>
@stop