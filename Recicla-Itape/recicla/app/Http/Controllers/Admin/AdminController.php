<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

	public function index(){
		return view('site.admin.index');
	}

	public function login()
	{
		return view('site.auth.login-admin');
	}
	public function postLogin(Request $request){

		$validator= validator($request->all(),[
			'email' => 'required|min:3|max:100',
			'password' => 'required|min:3|max:100',

		]);

		if($validator->fails()){
			return redirect('admin/login')->withErrors('$validator')->WithInput();
		}	
		$credentials = ['email'=> $request->get('email'),'password'=>$request->get('password')];

		if(auth()->guard('admin')->attempt($credentials)){
			return redirect('/admin');
		} else{
			return redirect('/admin/login')->whithErrors(['errors' => 'Login Invalido'])->whiteInput();
		}
	}
	public function logout(){
		auth()->guard('admin')->logout();
		return redirect('/admin/login');
	}
}
