<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class CadastroController extends Controller
{
	private $user;

	public function __construct(Users $user){
		$this->users = $user;
	}

	public function index(){
		return view('site.login');
	}

	public function cadastro(Request $request){
		/*Pega todos os dados do form*/
		$dataForm = $request->all();
		$dataForm["senha"]=bcrypt($dataForm["senha"]);
		/*Valida dados automaticamente*/
		$this->validate($request, $this->users->rules);

		/*Faz o insert no banco se passar na validação*/
		$insert = $this->users->create($dataForm);
		if($insert){
			return redirect('cadastro/entrar')->with('message','Usuario Cadastrado com Sucesso!');
		}
		else{
			return redirect()->back();
		}
	}
}
