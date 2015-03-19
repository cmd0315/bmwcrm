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
		</section>	
@include('layout.partials._footer')
