<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
	public function index(){
		$nome="miqueias";
		$title = "Home";
		return view('site\index',compact('title'));
	} 
}
