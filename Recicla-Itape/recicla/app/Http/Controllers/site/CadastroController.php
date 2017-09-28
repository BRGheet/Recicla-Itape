<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
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
		$senha = $dataForm['senha'];
		$dataForm["senha"]=Hash::make($dataForm["senha"]);
		$hash = $dataForm['senha'];

		if (Hash::check($senha, $hash)){
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
}