<?php namespace App; 

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $fillable = ['about', 'facebook', 'twitter'];

	public function user()
	{

		return belongsTo('User');

	}

}