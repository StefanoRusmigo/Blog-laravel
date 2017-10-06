<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationsController extends Controller
{
	public function create()
	{
   
   	  return view('registrations.create');

	}

	public function store()
	{
		$this->validate(request(),[
			   'name'=>'required',
			   'email'=>'required|email',
			   'password'=>'required|confirmed'

			]);
		$password = bcrypt(request('password'));
		$user = User::create(['name'=>request('name'),'email'=>request('email'),
				      'password'=>$password]);

		auth()->login($user);
		return redirect('/');	
	}
}
