<?php


// Password Reset Routes...
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
	/*Login User*/
	$this->get('cadastro/login', 'Auth\LoginController@showLoginForm')->name('login');
	$this->post('cadastro/login', 'Auth\LoginController@login');
	$this->post('logout', 'Auth\LoginController@logout')->name('logout');
	/*****************************************/
	/**********Rotas Personalizadas***********/
	/*****************************************/
	Route::get('/minha_conta', 'HomeController@index')->name('home');
	Route::get('/alterar_dados', 'HomeController@alterarDados')->name('home');
	/*****************************************/
	/*************Registro********************/
	/*****************************************/
	$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	$this->post('register', 'Auth\RegisterController@register');
});

/*Login admin*/
Route::group(['middleware' => 'admin'], function (){
	Route::group(['middleware'=> 'auth:admin'], function(){
		Route::get('/admin','AdminController@index');
	});
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/login','AdminController@postLogin');
	Route::get('/admin/logout','AdminController@logout');
});

