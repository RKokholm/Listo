<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model {

	/**
	 * Override default table name
	 */
	protected $table = 'Sheets';

	protected $fillable = ['title', 'description'];

	/**
	 * A sheet can belong to many users
	 */
	public function users(){

		return $this->belongsToMany('App\User')->withTimestamps();
	}

}
