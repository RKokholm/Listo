@extends('layout.main')

@section('title')
	Listo
@endsection

@section('content')

	
	@if(Auth::check())

		<h1>Welcome {{ Auth::user()->first_name }}</h1>
	

		<ul>
			@foreach($users as $user)
				<li><a href="{{ URL::route('profile_path', $user->first_name) }}">{{ $user->first_name }}</a></li>
			@endforeach
		</ul>


	@else
	
		<h1>You need to log in, to use this application</h1>

	@endif

@endsection