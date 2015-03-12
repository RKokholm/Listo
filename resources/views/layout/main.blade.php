<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic,500italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="header">
		<div id="headercenter">
			<a href="{{ URL::route('home') }}"><span id="icon">Listo</span></a>

			@if (Auth::check())
				<a href="{{ URL::route('mylists_path') }}"><span class="log_auth">My Lists</span></a> <a href="{{ URL::route('logout_path') }}"><span class="log_auth">Sign out</span></a>
			@else 
				<a href="{{ URL::route('login_path') }}"><span class="log_auth">Sign in</span></a>
			@endif

		</div>
	</div>
	
	<div id="content">
		@yield('content')
	</div>
</body>

</html>