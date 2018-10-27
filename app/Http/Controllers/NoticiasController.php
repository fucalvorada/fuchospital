<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Noticia;

class NoticiasController extends Controller
{
    
    public function index(){

    	$noticias = Noticia::all();

    	return view('noticias.painel_noticia', ['noticias' => $noticias]);

    }
}
