<?php

Route::get('/produtos', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/painel/noticias', 'NoticiasController@index')->name('noticia');
Route::post('/painel/noticias/cadastrar', 'NoticiasController@cadastrar')->name('cadastrar');
Route::get('/noticias/lista', 'NoticiasController@lista')->name('lista');
Route::post('/painel/noticias/edit/{id}', 'NoticiasController@edit')->name('edit');
Route::post('/painel/noticias/update', 'NoticiasController@update')->name('update');
Route::post('/painel/noticias/delete/{id}', 'NoticiasController@destroy')->name('delete');

/// Avisos
Route::get('/painel/avisos', 'AvisosController@index')->name('aviso');




Route::get('/noticias/show/{id}', 'NoticiasController@show')->name('show');






