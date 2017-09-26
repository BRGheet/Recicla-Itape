<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class adminController extends Controller
{
    public function admin(){
    	return view('site\admin-index');
    }
    public function info(){
    	return view('site\admin-info');
    }
    public function video(){
    	return view('site\admin-video');
    }
    public function ponto(){
    	return view('site\admin-ponto');
    }
    public function coop(){
    	return view('site\admin-coop');
    }
    public function gift(){
    	return view('site\admin-gift');
    }
    public function dicas(){
    	return view('site\admin-dicas');
    }
    public function infoStore(Request $req){
        $info = new Info();
        $info->titulo = $req->input('titulo');
        $info->autor = $req->input('autor');
        $info->texto = $req->input('texto');
        $info->save();

        return "Sucesso";
    }
}
