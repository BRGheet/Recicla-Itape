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
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
		$dataForm["senha"]=Hash::make($dataForm["senha"]);
		$senha = $dataForm["senha"];
		$email = $dataForm["email"];
		if (Auth::attempt(array('email' => $email, 'password' => $senha)))
		{
			return('logado');
		}

		/*$checkLogin = DB::table('users')->where(['email'=>$email,'senha'=>$senha])->get();
		if(count($checkLogin) > 0){
			return('Login Realizado com Sucesso!');
		}
		else{
			return'Falha no login';
		}*/
	}
}
