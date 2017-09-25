<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
	public function index(){
		$title = "Home";
		return view('site\main\index',compact('title'));
	} 
	public function queroReciclar(){
		$title = 'Quero Reciclar';
		return view('site\main\queroReciclar',compact('title'));
	}

	public function cooperativas(){
		$title = 'Cooperativas';
		return view('site\main\cooperativas',compact('title'));
	}
}
