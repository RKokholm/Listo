<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

	public function sheet(){

		return $this->hasOne('App\Sheet');
	}

}
