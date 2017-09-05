<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $fillable = ['nome','email','senha'];

	/*Valida campos automaticamente*/
	public $rules = [
	'nome' => 'required|min:3|max:150',
	'email' => 'required|max:150',
	'senha' => 'required|min:5|confirmed',
	'senha_confirmation'=> 'required|min:5'
	];
}
