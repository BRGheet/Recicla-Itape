<?php
/*Namespace das rotas site*/
Route::group(['namespace'=>'Site'],function(){
	Route::get('/', 'siteController@index');
	/*Retorna o mapa e seus respectivos marcadores de cooperativas.*/
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
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
Route::get('/testepdf','AdminController@pdf');

/*Rotas de Login e Cadastro*/
$this->get('cadastro/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('cadastro/login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
