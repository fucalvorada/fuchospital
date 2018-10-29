<?php

Route::get('/produtos', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/painel/noticias', 'NoticiasController@index')->name('noticia');
Route::post('/painel/noticias/cadastrar', 'NoticiasController@cadastrar')->name('cadastrar');
Route::get('/noticias/lista', 'NoticiasController@lista')->name('lista');



