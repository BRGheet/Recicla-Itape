<?php

/*Rotas Principais Do Site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
});



Route::group(['namespace'=>'Site\Auth'],function(){
	$this->get('cadastro/login', 'LoginController@showLoginForm')->name('login');
	$this->post('cadastro/login', 'LoginController@login')->name('login');

	$this->post('logout', 'LoginController@logout')->name('logout');

	$this->get('register', 'RegisterController@showRegistrationForm')->name('register');
	$this->post('register', 'RegisterController@register');
});
Route::group(['namespace'=>'Site\User'],function(){
	Route::get('/minha_conta', 'HomeController@AlterarDados')->name('home');
	Route::get('/vouchers', 'HomeController@Index')->name('home');
});

/*Rotas Da Interface Adminitrativa*/
Route::group(['middleware' => ['CheckAdmin']],function () {
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
	});
});

// Resetar Senhas
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');