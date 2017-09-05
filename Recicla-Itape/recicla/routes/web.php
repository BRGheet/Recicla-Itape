<?php
/*Namespace das rotas site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('cadastro/entrar','CadastroController@index');
	/*Metodo post usado para submeter o form*/
	Route::post('cadastro','CadastroController@cadastro');
	Route::get('home', 'siteController@index');
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
});

/*Route::resource('/entrar','CadastroLoginController');*/
