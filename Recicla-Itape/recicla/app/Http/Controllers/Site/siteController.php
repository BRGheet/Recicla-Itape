<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class siteController extends Controller
{
	public function index(){
		$title = "Home";
		return view('site\main\index',compact('title'));
	} 
	public function queroReciclar(){
		$title = 'Quero Reciclar';

		$markers = DB::table('markers')->get();

		return view('site\main\queroReciclar',compact('title'), ['markers' => $markers]);
	}

	public function mapFilter($dado){
		$title = 'Quero Reciclar';

		$markers = DB::table('markers')->where($dado, 1)->get();

		return view('site.main.queroReciclar', ['markers' => $markers], compact('title'));
	}

	public function cooperativas(){
		$title = 'Cooperativas';
		return view('site\main\cooperativas',compact('title'));
	}
	public function Tutoriais($id){
		$noticias = DB::table('tutoriais')->whereIn('id',[$id])->get();
		$title = 'Tutoriais';
		return view('site\main\tutoriais',compact('title','id','noticias'));
	}
}
