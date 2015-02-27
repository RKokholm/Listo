@extends('layout.main')

@section('title', 'Login')

@section('content')
	
	{!! Form::open(['route' => 'login_path']) !!}
		
		{!! Form::label('email', null, ['class' => 'label_style']) !!}<br>
		{!! Form::email('email', null, ['class' => 'form_field', 'required']) !!}<br><br>

		{!! Form::label('password', null, ['class' => 'label_style']) !!}<br>
		{!! Form::password('password', ['class' => 'form_field', 'required']) !!}
		
	{!! Form::close() !!}

@endsection