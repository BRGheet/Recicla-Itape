<?php

/*Rotas Principais Do Site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
	/*Login User*/
	$this->get('cadastro/login', 'Auth\LoginController@showLoginForm')->name('login');
	$this->post('cadastro/login', 'Auth\LoginController@login');
	$this->post('logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/minha_conta', 'User\HomeController@AlterarDados')->name('home');
	Route::get('/vouchers', 'User\HomeController@Index')->name('home');
	/*Rotas Registro De Usuarios*/
	$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	$this->post('register', 'Auth\RegisterController@register');
});

/*Rotas Da Interface Adminitrativa*/
Route::group(['middleware' => 'CheckAdmin'], function (){
	Route::group(['namespace'=>'Admin\Auth'],function(){
		Route::get('admin/login', 'LoginAdminController@login');
		Route::post('admin/login', 'LoginAdminController@loginValidation');
	});
});
Route::group(['middleware'=> 'auth:admin'], function(){
	Route::group(['namespace'=>'Admin'],function(){
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
		Route::get('admin/logout', 'Admin\Auth\adminController@logout');
	});
});
// Resetar Senhas
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');