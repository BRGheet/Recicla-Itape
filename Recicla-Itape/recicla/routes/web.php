<?php
/*Namespace das rotas site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('cadastro/entrar','CadastroController@index');
	/*Cadastro de usuarios*/
	Route::post('/cadastro','CadastroController@cadastro');
	Route::get('home', 'siteController@index');
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
});
Route::get('admin', 'adminController@admin');
/*Routes de Login e Cadastro*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
