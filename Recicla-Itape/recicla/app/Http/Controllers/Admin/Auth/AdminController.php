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
		$credentials = ['email'=> $request->get('email'),'password'=>$request->get('password')];

    	if(auth()->guard('admin')->attempt($credentials)){
    		return redirect('/admin');
    	} else{
    		return redirect('/admin/login')->withErrors(['errors' => 'Login Invalido'])->withInput();
    	}
	}
	public function logout(){
    		auth()->guard('admin')->logout();
    		return redirect('/admin/login');
    	}
}
