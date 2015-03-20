<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Auth;
use Redirect;


class AuthController extends Controller {

	public function create()
	{
		return view('auth.login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
			$user = Auth::user()->username;
			return Redirect::route('profile_path', $user);
		}

		return Redirect::back()->withInput()->withErrors(['Wrong username or password']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::home();
	}

}
