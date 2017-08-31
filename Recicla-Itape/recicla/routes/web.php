<?php
Route::resource('/entrar/','CadastroLoginController');

Route::get('home', 'siteController@index');
Route::get('/', 'siteController@index');
Route::get('reciclar', 'siteController@queroReciclar');
Route::get('cooperativas', 'siteController@Cooperativas');


/*Route::get('entrar', 'CadastroLoginController@entrar');
Route::get('entrar/cadastro', 'CadastroLoginController@PostCadastro');*/