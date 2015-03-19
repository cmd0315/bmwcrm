	
	<!-- Splash Message -->
	@if(Session::has('registration-success'))
	<div class="modal" id="registrationCompleteModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<h3>{{Session::get('registration-success') }}</h3>
	    	<p>Please expect an email from us confirming your registration.</p>
	    	<a class="btn btn-primary" href="{{URL::route('home')}}">Close</a>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	@endif
	<!-- js -->
	<!-- {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }} -->
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/scripts.js') }}
</body>
</html>