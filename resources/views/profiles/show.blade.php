@extends('layout.inside')

@section('content')

	<div id="right_nav">
		
		<div id="user_info">

			<img src="images/profile.png" id="profile_picture">
			<h4>{{ $user->first_name }}</h4>
			<h5>{{ $user->created_at->format('j-F-Y')  }}</h5>
		</div>

		<ul id="list_types">
			<a href="#"><li>Private</li></a>
			<a href="#"><li>Public</li></a>
			<a href="#"><li>Shared</li></a>
		</ul>

		<a href="#"><div id="plus_button"><i class="fa fa-plus"></i></div></a>
		<a href="#" id="new_list_button">New list</a>

	</div>

	<div id="show_box">

		Lists of {{ $user->first_name }}<br>

		{{ Session::get('error') }}
		
	</div>

@stop
