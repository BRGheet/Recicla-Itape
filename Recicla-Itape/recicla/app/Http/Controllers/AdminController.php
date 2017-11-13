<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Info;
use App\Video;
use App\Ponto;
use App\Coop;
use App\Gift;
use DateTime;

class adminController extends Controller
{
    public function __construct()
    {
       /* $this->middleware('auth:admin');*/
    }
    public function index(){
        $infos = DB::table('info')->get();
        return view('site.admin.admin', ['infos' => $infos]);
    }

    public function admin(){
        return view('site.admin.admin-index');
    }
    public function info(){
        return view('site.admin.admin-info');
    }
    public function video(){
        return view('site.admin.admin-video');
    }
    public function ponto(){
        return view('site.admin.admin-ponto');
    }
    public function coop(){
        return view('site.admin.admin-coop');
    }
    public function gift(){
        return view('site.admin.admin-gift');
    }
    public function dicas(){
        return view('site.admin.admin-dicas');
    }
    public function infoStore(Request $req){
        $info = new Info();
        $video = $req->input('video');
        $step1=explode('v=', $video);
        $step2 =explode('&',$step1[1]);
        $vedio_id = $step2[0];
        $Videolink = 'http://www.youtube.com/embed/'.$vedio_id;


        $info->titulo = $req->input('titulo');
        $info->autor = $req->input('autor');
        $info->resumo = $req->input('resumo');
        $info->video = $Videolink;
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
        $ponto->nome = $req->input('nome');
        $ponto->longitude = $req->input('longitude');
        $ponto->latitude = $req->input('latitude');
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
