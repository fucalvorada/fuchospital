<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Aviso;

class AvisosController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){

		$avisos = Aviso::all();

		return view('avisos.painel_aviso', ['avisos' => $avisos]);

	}
}
