<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroController extends Controller
{
    public function index(){
    	return view('site.login');
    }
    public function cadastro(){
    	return('Cadastrando');
    }
}
