@extends('layout.inside')

@section('content')

	@include('layout.partials.user_menu')

	<div id="show_box">	
		<!--<h6>Sheet number 1<i class="fa fa-pencil-square-o"></i></h6>

		<div class="seperator_line"></div>

		<div id="sheet_desc_area">

			<h2>Sheet description<i class="fa fa-pencil-square-o"></i></h2>

			<div id="sheet_desc_text">Sheet Description</div>

		</div><br>

		<div class="seperator_line"></div>

		<ul id="sheet_elements">
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
			<li>Sheet Element</li>
		</ul>-->

		{{ Session::get('error') }}
	</div>
@stop