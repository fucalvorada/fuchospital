<?php

Route::get('/produtos', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/painel/noticias', 'NoticiasController@index')->name('noticia');
Route::post('/painel/noticias/cadastrar', 'NoticiasController@cadastrar')->name('cadastrar');
Route::get('/noticias/lista', 'NoticiasController@lista')->name('lista');
Route::get('/noticias/show/{id}', 'NoticiasController@show')->name('show_noticia');
Route::post('/painel/noticias/edit/{id}', 'NoticiasController@edit')->name('edit');
Route::post('/painel/noticias/update', 'NoticiasController@update')->name('update');
Route::post('/painel/noticias/delete/{id}', 'NoticiasController@destroy')->name('delete');

/// Avisos
Route::get('/painel/avisos', 'AvisosController@index')->name('aviso');
Route::get('/noticias/avisos', 'AvisosController@lista')->name('lista_aviso');
Route::post('/painel/avisos/edit/{id}', 'AvisosController@edit')->name('edit_aviso');
Route::post('/painel/avisos/cadastrar', 'AvisosController@cadastrar')->name('cadastrar_aviso');
Route::post('/painel/avisos/update', 'AvisosController@update')->name('update_aviso');
Route::post('/painel/avisos/delete/{id}', 'AvisosController@destroy')->name('delete_aviso');


// Evento
Route::get('/painel/eventos', 'EventosController@index')->name('evento');
Route::get('/eventos/lista', 'EventosController@lista')->name('lista_evento');
Route::post('/painel/eventos/edit/{id}', 'EventosController@edit')->name('edit_evento');
Route::post('/painel/eventos/cadastrar', 'EventosController@cadastrar')->name('cadastrar_evento');
Route::post('/painel/eventos/update', 'EventosController@update')->name('update_evento');
Route::get('/eventos/show/{id}', 'EventosController@show')->name('show');
Route::post('/painel/eventos/delete/{id}', 'EventosController@destroy')->name('delete_evento');

// Aniversariantes
Route::get('/aniver/lista', 'AniverController@lista')->name('aniver'); 
Route::get('/aniver/lista/{data}', 'AniverController@listaMes')->name('aniver_mes');
Route::post('/aniver/listaUser', 'AniverController@listaUser')->name('aniver_user'); 


// Cardapio
Route::get('/painel/cardapio', 'CardapiosController@index')->name('cardapio');
Route::get('/painel/cardapio/cadastrar', 'CardapiosController@index')->name('cadastrar_cardapio');
Route::get('/painel/cardapio/update', 'CardapiosController@index')->name('update_cardapio');

// Perfil
Route::get('/perfil/index', 'PerfilController@index')->name('perfil');
Route::get('/perfil/edit', 'PerfilController@edit')->name('edit_perfil');























