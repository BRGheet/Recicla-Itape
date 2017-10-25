<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class siteController extends Controller
{
	private $totalPage = 6;

	public function index(){
		$tutoriais = DB::table('tutoriais')->orderBy('id', 'desc')->paginate($this->totalPage);
		$title = "Home";
		return view('site.main.index',compact('title','tutoriais'));
	} 
	public function queroReciclar(){
		$title = 'Quero Reciclar';
		return view('site.main.queroReciclar',compact('title'));
	}

	public function cooperativas(){
		$title = 'Cooperativas';
		return view('site.main.cooperativas',compact('title'));
	}
	public function Tutoriais($id){
		$tutoriais = DB::table('tutoriais')->whereIn('id',[$id])->get();
		$title = 'Tutoriais';
		return view('site.main.tutoriais',compact('title','id','tutoriais'));
	}
}
