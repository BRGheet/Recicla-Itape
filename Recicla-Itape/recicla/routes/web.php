<?php
Route::get('home', 'siteController@index');
Route::get('/', 'siteController@index');
Route::get('reciclar', 'siteController@queroReciclar');
Route::get('cooperativas', 'siteController@Cooperativas');

/*Login e Cadastro*/
Route::group(['namespace'=>'site'],function(){
	Route::get('cadastro/entrar','CadastroController@cadastro');
});

Route::resource('/entrar','CadastroLoginController');
