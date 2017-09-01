<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $fillable = ['nome','email','senha'];

	public $rules = [
		'name' => 'required|min:3|max:150',
		'email' => 'required|max:150',
		'senha' => 'required|min:5',
	];
}
