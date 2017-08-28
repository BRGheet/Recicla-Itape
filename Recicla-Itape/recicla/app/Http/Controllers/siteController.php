<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
	public function entrar(){
		return view('site\login');
	}
}
