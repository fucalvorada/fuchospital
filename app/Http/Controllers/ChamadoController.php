<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Chamado;
use App\User;

class ChamadoController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$id = Auth::User()->id;

		$chamados = Chamado::chamdoUser($id);

		return view('chamados.meus_chamados', ['chamados' => $chamados]);

	}
}
