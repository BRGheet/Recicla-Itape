<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Info;
use App\Video;
use App\Ponto;

class adminController extends Controller
{

    public function index(){
        $infos = DB::table('info')->get();
        return view('site\admin', ['infos' => $infos]);
    }

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

        return "Info Sucesso";
    }
    public function videoStore(Request $req){
        $video = new Video();
        $video->titulo = $req->input('titulo');
        $video->autor = $req->input('autor');
        $video->texto = $req->input('texto');
        $video->video_url = $req->input('video');
        $video->save();

        return "Video Sucesso";
    }
    public function pontoStore(Request $req){
        $ponto = new Ponto();
        $ponto->nome = $req->input('nome');
        $ponto->longitude = $req->input('longitude');
        $ponto->latitude = $req->input('latitude');
        $ponto->papel = $req->input('papel');
        $ponto->plastico = $req->input('plastico');
        $ponto->vidro = $req->input('vidro');
        $ponto->save();

        return "Ponto Sucesso";
    }
}
