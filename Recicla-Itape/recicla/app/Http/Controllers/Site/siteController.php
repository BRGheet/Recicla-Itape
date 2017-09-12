<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
	public function index(){
		$title = "Home";
		return view('site\nave\index',compact('title'));
	} 
	public function queroReciclar(){
		$title = 'Quero Reciclar';
		return view('site\nave\queroReciclar',compact('title'));
	}

	public function cooperativas(){
		$title = 'Cooperativas';
		return view('site\nave\cooperativas',compact('title'));
	}
}
