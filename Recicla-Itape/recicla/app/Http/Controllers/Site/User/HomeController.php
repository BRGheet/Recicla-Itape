<?php

namespace App\Http\Controllers\Site\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('site.user.home');
    }
    public function alterarDados(){
    	return view('site.user.alterardados');
    }
}
