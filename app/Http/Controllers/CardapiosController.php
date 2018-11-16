<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cardapio;


class CardapiosController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$cardapios = Cardapio::all();

		return view('cardapio.painel_cardapio', ['cardapios' => $cardapios]);

	}
}
