<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Sheet;
use Redirect;
use Auth;
use Validator;
use Input;


class ProfilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'sheet_title' => 'required|max:25',
			'sheet_desc' => 'max:100'
		]);

		if ($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$sheet = Sheet::create([
			'title' => ucfirst(Input::get('sheet_title')),
			'description' => Input::get('sheet_desc')
		]);

		$user = Auth::user();
		$username = Auth::user()->username;
		$sheet->users()->attach($user);

		return Redirect::route('profile_path', $username);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		try {
			
			$user = User::with(['profile', 'sheets'])->where('username', $username)->firstOrFail();
			return view('profiles.show', compact('user'));

		} catch (Exception $e) {
			return Redirect::route('profile_path', Auth::user()->username)->with('error', 'that user does not exist');
		}
	}

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
		return $sheet = Sheet::find($id);
		
	}

	public function showSheet($username, $sheetname)
	{
		$sheet = Sheet::where('title', $sheetname)->first();
		$user = User::with(['profile', 'sheets'])->where('username', $username)->first();
		return view('profiles.sheet', compact('sheet', 'user'));
	}

}
