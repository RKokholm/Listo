@extends('layout.main')

@section('title', 'Register')

@section('content')

	{!! Form::open(['route' => 'register_path']) !!}

		{!! Form::label('first_name', null,['class' => 'label_style']) !!}<br>
		{!! Form::text('first_name', null,['class' => 'form_field', 'required']) !!}<br>
		
		{!! Form::label('last_name', null,['class' => 'label_style']) !!}<br>
		{!! Form::text('last_name', null,['class' => 'form_field', 'required']) !!}<br>
		
		{!! Form::label('email', null,['class' => 'label_style']) !!}<br>
		{!! Form::email('email', null,['class' => 'form_field', 'required']) !!}<br>
		
		{!! Form::label('password', null,['class' => 'label_style']) !!}<br>
		{!! Form::password('password', ['class' => 'form_field', 'required']) !!}<br>

		{!! Form::submit('Create Account', ['class' => 'button_style']) !!}

	{!! Form::close() !!}

@endsection