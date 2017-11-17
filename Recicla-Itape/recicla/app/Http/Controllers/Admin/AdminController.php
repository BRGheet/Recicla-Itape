<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Info;
use App\Video;
use App\Ponto;
use App\Coop;
use App\Gift;
use DateTime;

class AdminController extends Controller
{
	 protected $title='Dashboard - Administrador';
     public function __construct()
    {
        /*$this->middleware('authAdmin');*/
    }
    public function index(){
        $infos = DB::table('info')->get();
        return view('site.admin.admin', ['infos' => $infos],compact('title'));
    }

    public function admin(){
        $title = $this->title;
        return view('site.admin.admin-index',compact('title'));
    }
    public function info(){
        $title = $this->title;
        return view('site.admin.admin-info',compact('title'));
    }
    public function video(){
        $title = $this->title;
        return view('site.admin.admin-video',compact('title'));
    }
    public function ponto(){
        $title = $this->title;
        return view('site.admin.admin-ponto',compact('title'));
    }
    public function coop(){
        $title = $this->title;
        return view('site.admin.admin-coop',compact('title'));
    }
    public function gift(){
        $title = $this->title;
        return view('site.admin.admin-gift',compact('title'));
    }
    public function dicas(){
        $title = $this->title;
        return view('site.admin.admin-dicas',compact('title'));
    }
    public function infoStore(Request $req){
        $info = new Info();
        $info->titulo = $req->input('titulo');
        $info->autor = Auth::user()->name;
        $info->resumo = $req->input('resumo');
        $info->video = $req->input('video');
        $info->texto = $req->input('texto');
        $info->save();

        return "Foi inserido uma nova informação com sucesso";
    }
    public function videoStore(Request $req){
        $video = new Video();
        $video->titulo = $req->input('titulo');
        $video->autor = $req->input('autor');
        $video->texto = $req->input('texto');
        $video->dataHora = new DateTime();
        $video->video_url = $req->input('video');
        $video->save();

        return "Novo vídeo inserido com sucesso";
    }
    public function pontoStore(Request $req){
        $ponto = new Ponto();
        $ponto->name = $req->input('nome');
        $ponto->address = 'reverendo';
        $ponto->lng = $req->input('longitude');
        $ponto->lat = $req->input('latitude');
        $ponto->papel = $req->input('papel');
        $ponto->plastico = $req->input('plastico');
        $ponto->vidro = $req->input('vidro');
        $ponto->save();

        return "Ponto adicionado no mapa com sucesso";
    }

    public function coopStore(Request $req){
        $coop = new Coop();
        $coop->nome = $req->input('nome');
        $coop->endereco = $req->input('endereco');
        $coop->telefone = $req->input('telefone');
        $coop->papel = $req->input('papel');
        $coop->plastico = $req->input('plastico');
        $coop->vidro = $req->input('vidro');

        $coop->save();

        return "Nova Cooperativa adicionada com sucesso";
    }

    public function giftStore(Request $req){
        $gift = new Gift();
        $gift->nome = $req->input('nome');
        $gift->descricao = $req->input('desc');
        $gift->pontos = $req->input('pontos');

        $gift->save();

        return "Recompensa adicionada com sucesso";
    }
}
