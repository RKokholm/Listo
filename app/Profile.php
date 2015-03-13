<?php

class Profile extends Eloquent {

	public function user()
	{

		return belongsTo('User');

	}

}