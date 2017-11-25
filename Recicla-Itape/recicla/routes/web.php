<?php

/*Rotas Principais Do Site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
});


/*Rotas De Validação de Login, Sair,Mostrar Form*/
Route::group(['namespace'=>'Site\Auth'],function(){
	$this->get('cadastro/login', 'LoginController@showLoginForm')->name('login');
	$this->post('cadastro/login', 'LoginController@login')->name('login');

	$this->post('logout', 'LoginController@logout')->name('logout');

	$this->get('register', 'RegisterController@showRegistrationForm')->name('register');
	$this->post('register', 'RegisterController@register');
});

/*Rotas Usuario Logado*/
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

		/*Criar dados para a tabela*/
Route::post('admin/info/store', 'AdminController@infoStore');
Route::post('admin/ponto/store', 'AdminController@pontoStore');
Route::post('admin/coop/store', 'AdminController@coopStore');
Route::post('admin/add/store','AdminController@addStore');
Route::post('admin/gift/store', 'AdminController@giftStore');
Route::post('admin/check/store', 'AdminController@checkVoucher');

/*Editar os dados da tabela*/
Route::get('admin/info/edit={id}', 'AdminController@infoEdit');
Route::post('admin/info/update', 'AdminController@infoUpdate');
Route::get('admin/ponto/edit={id}', 'AdminController@pontoEdit');
Route::post('admin/ponto/update','AdminController@pontoUpdate');
Route::get('admin/coop/edit={id}', 'AdminController@coopEdit');
Route::post('admin/coop/update','AdminController@coopUpdate');
Route::get('admin/gift/edit={id}', 'AdminController@giftEdit');
Route::post('admin/gift/update','AdminController@giftUpdate');


/*Deletar os dados da tabela*/
Route::get('admin/info/delete={id}', 'AdminController@infoDelete');
Route::get('admin/ponto/delete={id}', 'AdminController@pontoDelete');
Route::get('admin/coop/delete={id}', 'AdminController@coopdelete');
Route::get('admin/gift/delete={id}', 'AdminController@giftdelete');

/*Mostrar os dados das tabelas*/
Route::get('admin/info/show', 'AdminController@infoShow');
Route::get('admin/ponto/show', 'AdminController@pontoShow');
Route::get('admin/coop/show', 'AdminController@coopShow');
Route::get('admin/gift/show', 'AdminController@giftShow');
	});
});

// Resetar Senhas
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');