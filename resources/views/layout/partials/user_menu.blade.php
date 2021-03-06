<div id="right_nav">
	<div id="user_info">
		<img src="/images/profile.png" id="profile_picture">
		<h4>{{ $user->first_name }}</h4>
		<h5>{{ $user->created_at->format('j-F-Y')  }}</h5>
	</div>

	<ul id="sheet_types">
		<a href="#"><li>Private</li></a>
		<a href="#"><li>Public</li></a>
		<a href="#"><li>Shared</li></a>
	</ul>

	<ul id="sheet_titles">
		@foreach($user->sheets as $user_sheet)

			<li>
				<a href="{{ URL::route('show_sheet_path', [Auth::user()->username, $user_sheet->title]) }}">
					{{ $user_sheet->title }}
						<a href="{{ URL::route('sheet_destroy_path', $user_sheet->id) }}">
							<i class="fa fa-trash-o"></i>
						</a>
				</a>
			</li>

		@endforeach
	</ul>

	<div id="new_sheet"><i class="fa fa-plus"></i>New Sheet</div>

	@include('layout.partials.error')

	<div class="form_wrapper">

		{!! Form::open(['route' => ['profile_path', $user->username], 'class' => 'new_sheet_form']) !!}

			{!! Form::text('sheet_title', null, ['required' => 'required', 'placeholder' => 'Sheet title', 'class' => 'form_field_center']) !!}
			{!! Form::text('sheet_desc', null, ['required' => 'required', 'placeholder' => 'Description', 'class' => 'form_field_center']) !!}

			{!! Form::submit('Add Sheet', ['class' => 'button_style']) !!}

		{!! Form::close() !!}

	</div>

	Heeey

</div>