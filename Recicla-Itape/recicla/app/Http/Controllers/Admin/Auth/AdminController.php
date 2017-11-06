<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
	protected $redirectTo = '/admin';

	public function login(){
		return view("site.auth.login-admin");
	}
	public function loginValidation(Request $request){
		$FormData = $request->all();
		$validator = Validator::make($FormData, [
			'email' => 'required|string|email|min:10',
			'password' => 'required|string|min:6',
		]);
		if ($validator->fails()) {
			return redirect('/admin/login')
			->withErrors($validator, 'adminErrors')->withInput();
		}

	}
}
