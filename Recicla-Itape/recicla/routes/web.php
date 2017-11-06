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

/* Rotas da tela de administrador */
Route::get('info', 'AdminController@info');
Route::get('admin', 'adminController@admin');
Route::get('admin/index', 'adminController@index');
Route::get('info', 'adminController@info');
Route::get('ponto', 'adminController@ponto');
Route::get('coop', 'adminController@coop');
Route::get('gift', 'adminController@gift');
Route::post('admin/info/send', 'adminController@infoStore');
Route::post('admin/ponto/send', 'adminController@pontoStore');
Route::post('admin/coop/send', 'adminController@coopStore');
Route::post('admin/gift/send', 'adminController@giftStore');
/*Routes de Login e Cadastro*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


