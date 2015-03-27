@extends('layout.inside')

@section('content')

	<div id="right_nav">
		
		<div id="user_info">

			<img src="images/profile.png" id="profile_picture">
			<h4>{{ $user->first_name }}</h4>
			<h5>{{ $user->created_at->format('j-F-Y')  }}</h5>
		</div>

		<ul id="sheet_types">
			<a href="#"><li>Private</li></a>
			<a href="#"><li>Public</li></a>
			<a href="#"><li>Shared</li></a>
		</ul>

		<a href="#"><div id="new_sheet"><i class="fa fa-plus"></i>New List</div></a>

		@include('layout.partials.error')

		{!! Form::open(['route' => ['profile_path', $user->username], 'class' => 'new_sheet_form']) !!}

			{!! Form::text('sheet_title', null, ['required' => 'required', 'placeholder' => 'Sheet title', 'class' => 'form_field_center']) !!}
			{!! Form::text('sheet_desc', null, ['required' => 'required', 'placeholder' => 'Description', 'class' => 'form_field_center']) !!}

			{!! Form::submit('Add Sheet', ['class' => 'button_style']) !!}

		{!! Form::close() !!}

	</div>

	<div id="show_box">

		<h6>Sheet number 1</h6>

		<div class="seperator_line"></div>

		<ul id="sheet_elements">
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
		</ul>

		{{ Session::get('error') }}
		
	</div>

@stop
