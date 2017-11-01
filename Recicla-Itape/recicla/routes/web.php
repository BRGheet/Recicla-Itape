<?php
// Resetar Senhas
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

/*Principais rotas site*/
Route::group(['namespace'=>'Site'],function(){
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
	/*Login User*/
	$this->get('cadastro/login', 'Auth\LoginController@showLoginForm')->name('login');
	$this->post('cadastro/login', 'Auth\LoginController@login');
	$this->post('logout', 'Auth\LoginController@logout')->name('logout');
	/*****************************************/
	/**********Rotas Usuario Logado***********/
	/*****************************************/
	Route::get('/minha_conta', 'User\HomeController@AlterarDados')->name('home');
	Route::get('/vouchers', 'User\HomeController@Index')->name('home');
	/*****************************************/
	/*************Registro********************/
	/*****************************************/
	$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	$this->post('register', 'Auth\RegisterController@register');
});
/*Login admin*/
/*Route::group(['middleware' => 'admin'], function (){
	Route::group(['middleware'=> 'auth:admin'], function(){
		Route::get('/admin/index','AdminController@index');
		Route::get('/admin/informacao','AdminController@info');
	});
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/login','AdminController@postLogin');
	Route::get('/admin/logout','AdminController@logout');
});*/

/* Rotas da tela de administrador */
Route::get('admin', 'AdminController@admin');
Route::get('admin/index', 'AdminController@index');
Route::get('info', 'AdminController@info');
Route::get('ponto', 'AdminController@ponto');
Route::get('coop', 'AdminController@coop');
Route::get('gift', 'AdminController@gift');
Route::post('admin/info/send', 'AdminController@infoStore');
Route::post('admin/ponto/send', 'AdminController@pontoStore');
Route::post('admin/coop/send', 'AdminController@coopStore');
Route::post('admin/gift/send', 'AdminController@giftStore');


