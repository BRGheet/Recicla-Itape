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
/* Rotas da tela de administrador */
Route::get('admin', 'adminController@admin');
Route::get('admin/index', 'adminController@index');
Route::get('info', 'adminController@info');
Route::get('video', 'adminController@video');
Route::get('ponto', 'adminController@ponto');
Route::get('coop', 'adminController@coop');
Route::get('gift', 'adminController@gift');
Route::get('dicas', 'adminController@dicas');
Route::post('admin/info/send', 'adminController@infoStore');
Route::post('admin/video/send', 'adminController@videoStore');
Route::post('admin/ponto/send', 'adminController@pontoStore');
/*Routes de Login e Cadastro*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
