@extends('layout.main')

@section('title')
	Login
@endsection

@section('content')
	
	{!! Form::open(['route' => 'login_path']) !!}
		
		{!! Form::label('email', ['class' => 'label_style']) !!}<br>
		{!! Form::email('email', ['required']) !!}

		{!! Form::label('Password', ['class' => 'label_style']) !!}<br>
		{!! Form::password('password', null, ['required']) !!}

	{!! Form::close() !!}

@endsection