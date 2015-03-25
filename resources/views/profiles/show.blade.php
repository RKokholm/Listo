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

	</div>

	<div id="show_box">

		<h6>List number 1</h6>

		<div class="seperator_line"></div>

		<ul id="list_elements">
			<li>List Element</li>
			<li>List Element</li>
			<li>List Element</li>
			<li>List Element</li>
			<li>List Element</li>
			<li>List Element</li>
		</ul>

		{{ Session::get('error') }}
		
	</div>

@stop
