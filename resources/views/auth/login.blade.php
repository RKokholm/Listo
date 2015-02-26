@extends('layout.main')

@section('title')
	Login
@endsection

@section('content')
	
	{!! Form::open(['route' => 'login_path', 'class' => 'login_form']) !!}


		{!! Form::label('email', 'Email') !!}<br>
		{!! Form::email('email', ['class' => 'form_text_field', 'required']) !!}

		{!! Form::label('password', 'Password') !!}<br>
		{!! Form::password('password', ['class' => 'form_text_field', 'required']) !!}

	{!! Form::close() !!}

@endsection