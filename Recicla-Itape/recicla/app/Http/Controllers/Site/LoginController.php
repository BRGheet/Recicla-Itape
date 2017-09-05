<?php

namespace App\Http\Controllers\site;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Users;
use DB;


class LoginController extends BaseController
{
	private $user;

	public function __construct(Users $user){
		$this->users = $user;
	}

	public function login(Request $request){
		/*Pega todos os dados do form*/
		$dataForm = $request->except('_token');
		$email = $dataForm["email"];
		$senha = Crypt::decryptString($dataForm["senha"]);
		/*$senha = $dataForm["senha"];*/
		if (Hash::check('plain-text', $senha)) {
    		return('teste');
		}
		$checkLogin = DB::table('users')->where(['email'=>$email,'senha'=>$senha])->get();
		if(count($checkLogin) > 0){
			return('Login Realizado com Sucesso!');
		}
		else{
			return'Falha no login';
		}
	}
}
