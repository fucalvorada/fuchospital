<?php

Route::get('/produtos', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

// Noticias
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
Route::get('/painel/cardapio/lista', 'CardapiosController@lista')->name('lista_cardapio');
Route::post('/painel/cardapio/cadastrar', 'CardapiosController@cadastrar')->name('cadastrar_cardapio');
Route::post('/painel/cardapio/update', 'CardapiosController@update')->name('update_cardapio');
Route::post('/painel/cardapio/edit/{id}', 'CardapiosController@edit')->name('edit_cardapio');
Route::post('/painel/cardapio/delete/{id}', 'CardapiosController@destroy')->name('delete_cardapio');

// Perfil
Route::get('/perfil/index', 'PerfilController@index')->name('perfil');
Route::post('/perfil/edit/{id}', 'PerfilController@edit')->name('edit_perfil');
Route::post('/perfil/update', 'PerfilController@update')->name('perfil_update');
Route::post('/perfil/confirm/{id}', 'PerfilController@confirm')->name('confirm');
Route::get('/perfil/adm_user', 'PerfilController@admUser')->name('adm_user');
Route::get('/perfil/registrar', 'PerfilController@registrar')->name('registrar');
Route::post('/perfil/cadastrarUser', 'PerfilController@cadastrarUser')->name('cadastrar_user');

// Arquivos
Route::get('/arquivos/index', 'ArquivosController@index')->name('arquivos_view');
Route::get('/painel/arquivos/lista', 'ArquivosController@lista')->name('painel_arquivos');
Route::post('/painel/arquivos/cadastrar', 'ArquivosController@cadastrar')->name('cadastrar_arquivo');
Route::post('/painel/arquivos/update', 'ArquivosController@update')->name('update_arquivo');
Route::post('/painel/arquivos/edit/{id}', 'ArquivosController@edit')->name('edit_arquivo');
Route::post('/painel/arquivos/delete/{id}', 'ArquivosController@destroy')->name('delete_arquivo');

// Chamados
Route::get('/chamados/index', 'ChamadoController@index')->name('chamado_view');
Route::post('/chamados/cadastrar', 'ChamadoController@cadastrar')->name('reportar_chamado');
Route::get('/chamados/lista', 'ChamadoController@lista')->name('chamado_lista');
Route::get('/chamados/view/{id}', 'ChamadoController@view')->name('chamado_show');
Route::post('/chamados/responder', 'ChamadoController@responder')->name('responder_chamado');

































