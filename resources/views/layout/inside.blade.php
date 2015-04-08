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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script>

		$(document).ready(function(){
			$("#new_sheet").click(function(){
				$(".form_wrapper").fadeToggle('fast');
			});
		});

	</script>

</head>
<body>
	<div id="header_interface">
		<div id="headercenter">
			<a href="{{ URL::route('home') }}"><span id="icon_interface">Listo</span></a>

				<a href="#"><span class="log_auth_interface">{{ Auth::user()->first_name }}</span></a> <a href="{{ URL::route('logout_path') }}"><span class="log_auth_interface">Sign out</span></a>
				

		</div>
	</div>
	
	<div id="content">
		@yield('content')
	</div>
</body>

</html>