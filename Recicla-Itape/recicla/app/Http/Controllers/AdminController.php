<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Info;
use App\Ponto;
use App\Gift;
use App\Coop;

class AdminController extends Controller
{
    
    public function index(){
    	return view('site.admin.index');
    }

    public function login()
    {
    	return view('site.auth.login-admin');
    }
    public function postLogin(Request $request){

    	$validator= validator($request->all(),[
    		'email' => 'required|min:3|max:100',
    		'password' => 'required|min:3|max:100',

    	]);

    	if($validator->fails()){
			return redirect('admin/login')->withErrors('$validator')->WithInput();
		}	
		$credentials = ['email'=> $request->get('email'),'password'=>$request->get('password')];

    	if(auth()->guard('admin')->attempt($credentials)){
    		return redirect('/admin');
    	} else{
    		return redirect('/admin/login')->whithErrors(['errors' => 'Login Invalido'])->whiteInput();
    	}
    }
    public function logout(){
    		auth()->guard('admin')->logout();
    		return redirect('/admin/login');
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
        $info->titulo = $req->input('titulo');
        $info->autor = $req->input('autor');
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
        $ponto->nome = $req->input('nome');
        $ponto->lat = $req->input('longitude');
        $ponto->lgn = $req->input('latitude');
        $ponto->content = $req->input('descricao');
        $ponto->address = $req->input('endereco');
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
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/cooperativas/'.$nomeImagem));
            $coop->imagem = $nomeImagem;
        }
        $coop->papel = $req->input('papel') == "on" ? 1 : 0;
        $coop->plastico = $req->input('plastico') == "on" ? 1 : 0;
        $coop->vidro = $req->input('vidro') == "on" ? 1 : 0;

        $coop->save();

        return "Nova Cooperativa adicionada com sucesso";
    }

    public function giftStore(Request $req){
        $gift = new Gift();
        $gift->nome = $req->input('nome');
         if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/gift/'.$nomeImagem));
            $gift->imagem = $nomeImagem;
        }
        $gift->descricao = $req->input('desc');
        $gift->pontos = $req->input('pontos');

        $gift->save();

        return "Recompensa adicionada com sucesso";
    }
}
