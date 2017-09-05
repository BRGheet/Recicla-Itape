<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
	public function index(){
		$nome="miqueias";
		$title = "Home";
		return view('site\index',compact('title'));
	} 
	public function queroReciclar(){
		return view('site\queroReciclar');
	}

	public function cooperativas(){
		return view('site\cooperativas');
	}

	public function entrar(Users $usuarios){
		$title = "Login - Cadastro";
		$user = $usuarios->all();
		return view('site\login',compact('user'));
	}
	public function PostCadastro(Request $request){
		/*return view('site\processamento\cadastro');*/
		dd($request->all());
		return('Add User..');
	}
}
