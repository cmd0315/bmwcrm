@include('layout.partials._header')
	<body>
		<section id="page">
			<header>
				<div class="ci-box">
					<a href="{{ URL::route('home')}}">{{ HTML::image("images/CI-box.png", "BMW CI", ["class" => 'img-responsive']) }}</a>
				</div>
			</header>
			<div class="container">
				@yield('content')
			</div>
			@include('flash::message')


		<!-- Splash Message 2 -->
		@if(Session::has('registration-success'))
		<div class="modal" id="registrationCompleteModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<h3>{{Session::get('registration-success') }}</h3>
		    	<p>You are now subscribed to the BMW Magazine.</p>
		    	<p>Please expect an email from us confirming your registration.</p>
		    	<a class="btn btn-primary" href="{{URL::route('home')}}">Close</a>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		@endif
		</section>	
@include('layout.partials._footer')
