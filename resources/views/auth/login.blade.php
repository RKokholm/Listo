@extends('layout.main')

@section('title', 'Login')

@section('content')
	
	{!! Form::open(['route' => 'login_path']) !!}
		
		{!! Form::label('email', null, ['class' => 'label_style']) !!}<br>
		{!! Form::email('email', null, ['class' => 'form_field', 'required']) !!}<br><br>

		{!! Form::label('password', null, ['class' => 'label_style']) !!}<br>
		{!! Form::password('password', ['class' => 'form_field', 'required']) !!}<br>

		{!! Form::submit('Log in', ['class' => 'button_style']) !!}
		
	{!! Form::close() !!}

	<a href="{{ URL::route('register_path') }}"><span class="link_style">Create Account</span></a>
	
	@if($errors->any())

		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

	@endif
		

@endsection