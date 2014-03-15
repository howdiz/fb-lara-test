<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	{{ HTML::style('css/cover.css'); }}


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="site-wrapper">
	 	<div class="site-wrapper-inner">
        	<div class="cover-container">
        		<div class="inner cover">	
				@if(Session::has('message'))
				    {{ Session::get('message')}}
				@endif
				<br>
				@if (!empty($data))
				    Hello, {{{ $data['name'] }}} 
				    <img src="{{ $data['photo']}}">
				    <br>
				    Your email is {{ $data['email']}}
				    <br>
				    <a class="btn btn-primary btn-lg" href="logout">Logout</a>
				@else
				    Hi! Would you like to <a class="btn btn-primary btn-lg" href="login/fb">Login with Facebook</a>?
				@endif
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
