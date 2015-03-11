<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required|min:3|max:20',
			'last_name' => 'required|min:3|max:20',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed|max:60',
			'password_confirmation' => 'required' 
		];
	}
}
