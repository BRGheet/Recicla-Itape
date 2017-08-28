<?php
Route::get('home', 'siteController@index');
Route::get('/', 'siteController@index');
Route::get('reciclar', 'siteController@queroReciclar');
Route::get('cooperativas', 'siteController@Cooperativas');
Route::get('entrar', 'siteController@entrar');
Route::get('cadastro', 'siteController@ProcessaCadastro');