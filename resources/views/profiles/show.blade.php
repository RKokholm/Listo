@extends('layout.main')

@section('content')
	<div id="right_area">
		
	</div>	

	<div id="main_area">
		{{ $user->first_name }}
		<br><br>
		{{ $user->profile->about }}
	</div>
@stop