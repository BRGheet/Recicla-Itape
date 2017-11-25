<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use DB;
use Redirect;
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
    public function add(){
        return view('site.admin.admin-add-ponto');
    }
    public function check(){
        return view('site.admin.admin-check');
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

   

    public function addStore(Request $req){
        $_id = $req->input('user');
        $_pontos = $req->input('pontos');
        DB::select('call add_pontos_usuario('.$_id.','.$_pontos.');');

        return "Pontos adicionados na conta do usuário com sucesso";
    }

    public function checkVoucher(Request $req){
        $_cod = $req->input('codigo');
        $result = DB::select('call check_voucher('.$_cod.');');
        if ($result != null) {
            return "Código confirmado com sucesso";
        }
        throw new Exception("Unable to find customer", 410);
    }
    /*Todas as Funções da tabela de informações*/
    public function infoStore(Request $req){
        $info = new Info();
        $info->titulo = $req->input('titulo');
        $info->autor = $req->input('autor');
        $info->resumo = $req->input('resumo');
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/info/'.$nomeImagem));
            $info->imagem = $nomeImagem;
        }
        $info->video = $req->input('video');
        $info->texto = $req->input('texto');
        $info->save();

        return "Foi inserido uma nova informação com sucesso";
    }
    /*Mostrar as notícias feitas para modificação*/
    public function infoShow(){
        $infos = DB::table('tutoriais')->get();

        return view('site.admin.admin-info-show', ["infos" => $infos]);
    }
    /*Deletar uma informação selecionada*/
    public function infoDelete($id){
        DB::delete('delete from tutoriais where id='.$id.';');
        return Redirect::back()->with('success','Informação deletada com sucesso');
    }
    /*Editar uma informação caso precisar*/
    public function infoEdit($id){
        $infos = DB::table('tutoriais')->where('id',$id)->get();
        return view('site.admin.admin-info-edit',['infos' => $infos]);
    }
    /*Sobreescreve os dados editados da coluna que foi especificada*/
    public function infoUpdate(Request $req){
        $id = $req->input('id');
        $infoImagem = null;
        $titulo = $req->input('titulo');
        $autor = $req->input('autor');
        $video = $req->input('video');
        $resumo = $req->input('resumo');
        $texto = $req->input('texto');

        $update = null;

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/info/'.$nomeImagem));
            $infoImagem = $nomeImagem;
            $update = "update tutoriais set titulo='".$titulo."', autor='".$autor."', video='".$video."', resumo='".$resumo."', imagem='".$infoImagem."', texto='".$texto."' where id=".$id.";";
        }else{
            $update = "update tutoriais set titulo='".$titulo."', autor='".$autor."', video='".$video."', resumo='".$resumo."', texto='".$texto."' where id=".$id.";";
        }

        DB::update($update);

        return "Update completo";
    }

    public function pontoStore(Request $req){
        $ponto = new Ponto();
        $ponto->name = $req->input('nome');
        $ponto->content = $req->input('descricao');
        $ponto->address = $req->input('endereco');
        $ponto->lat = $req->input('latitude');
        $ponto->lng = $req->input('longitude');
        $ponto->papel = $req->input('papel') == "on" ? 1 : 0;
        $ponto->plastico = $req->input('plastico') == "on" ? 1 : 0;
        $ponto->vidro = $req->input('vidro') == "on" ? 1 : 0;

        $ponto->save();

        return "Ponto adicionado no mapa com sucesso";
    }

    public function pontoShow(){
        $pontos = DB::table('markers')->get();

        return view('site.admin.admin-ponto-show', ['pontos' => $pontos]);
    }

    public function pontoDelete($id){
        DB::delete('delete from markers where id='.$id.';');
        return Redirect::back()->with('success','Marcador deletado com sucesso');
    }

    public function pontoEdit($id){
        $pontos = DB::table('markers')->where('id',$id)->get();
        return view('site.admin.admin-ponto-edit',['pontos' => $pontos]);
    }

    public function pontoUpdate(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $content = $req->input('descricao');
        $address = $req->input('endereco');
        $lat = $req->input('longitude');
        $lgn = $req->input('latitude');
        $papel = $req->input('papel') == "on" ? 1 : 0;
        $plastico = $req->input('plastico') == "on" ? 1 : 0;
        $vidro = $req->input('vidro') == "on" ? 1 : 0;

        $update = "update markers set name='".$nome."',  content='".$content."', lat=".$lat.", lng=".$lgn.", papel=".$papel.", plastico=".$plastico.", vidro=".$vidro." where id=".$id.";";

        DB::update($update);

        return "Marcador atualizado com sucesso";
    }

    public function coopStore(Request $req){
        $coop = new Coop();
        $coop->nome = $req->input('nome');
        $coop->endereco = $req->input('endereco');
        $coop->telefone = $req->input('telefone');
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/coop/'.$nomeImagem));
            $coop->imagem = $nomeImagem;
        }
        $coop->papel = $req->input('papel') == "on" ? 1 : 0;
        $coop->plastico = $req->input('plastico') == "on" ? 1 : 0;
        $coop->vidro = $req->input('vidro') == "on" ? 1 : 0;

        $coop->save();

        return "Nova Cooperativa adicionada com sucesso";
    }

    public function coopShow(){
        $coops = DB::table('coop')->get();

        return view('site.admin.admin-coop-show', ['coops' => $coops]);
    }

    public function coopDelete($id){
        DB::delete('delete from coop where id='.$id.';');
        return Redirect::back()->with('success','Cooperativa deletada com sucesso');
    }

    public function coopEdit($id){
        $coops = DB::table('coop')->where('id',$id)->get();
        return view('site.admin.admin-coop-edit',['coops' => $coops]);
    }

    public function coopUpdate(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $telefone = $req->input('telefone');
        $papel = $req->input('papel') == "on" ? 1 : 0;
        $plastico = $req->input('plastico') == "on" ? 1 : 0;
        $vidro = $req->input('vidro') == "on" ? 1 : 0;

        $update = null;

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/coop/'.$nomeImagem));
            $coopImagem = $nomeImagem;
            $update = "update coop set nome='".$nome."' , endereco='".$endereco."' , telefone='".$telefone."' , imagem='".$coopImagem."' , papel=".$papel." , plastico=".$plastico." , vidro=".$vidro." where id=".$id.";";
        }else{
            $update = "update coop set nome='".$nome."' , endereco='".$endereco."' , telefone='".$telefone."' , papel=".$papel." , plastico=".$plastico." , vidro=".$vidro." where id=".$id.";";
        }

        DB::update($update);

        return "Cooperativa atualizada com sucesso";
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
        $gift->descricao = $req->input('descricao');
        $gift->pontos = $req->input('pontos');

        $gift->save();

        return "Recompensa adicionada com sucesso";
    }

    public function giftShow(){
        $gifts = DB::table('gift')->get();

        return view('site.admin.admin-gift-show', ['gifts' => $gifts]);
    }

    public function giftDelete($id){
        DB::delete('delete from gift where id='.$id.';');
        return Redirect::back()->with('success','Recompensa deletada com sucesso');
    }

    public function giftEdit($id){
        $gifts = DB::table('gift')->where('id',$id)->get();
        return view('site.admin.admin-gift-edit',['gifts' => $gifts]);
    }

    public function giftUpdate(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $pontos = $req->input('pontos');
        $update = null;
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalName();
            Image::make($imagem)->resize(400,400)->save(public_path('/uploads/gift/'.$nomeImagem));
            $giftImagem = $nomeImagem;
            $update = "update gift set nome='".$nome."', descricao='".$descricao."', pontos=".$pontos." , imagem='".$giftImagem."' where id=".$id.";";
        } else {
            $update = "update gift set nome='".$nome."', descricao='".$descricao."', pontos=".$pontos." where id=".$id.";";
        }

        DB::update($update);

        return "Update de Recompensa feito com sucesso";
    } 
}
