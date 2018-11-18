<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;


class AniverController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function lista(){

		$user = User::orderBy('nascimento', 'ASC')->get();

		return view('aniver.aniver_lista', ['user' => $user]);

	}

	public function listaMes($data =  null){

		if($data <= 10){
			$data = '0'.$data;
		}

		$user = User::findDataNasci($data);

		return view('aniver.aniver_lista_mes', ['user' => $user]);
	}


	public function listaUser(Request $request){

		$id  =  $request->id;
		$user = User::find($id);

		return view('aniver.aniver_lista_user', ['user' => $user]); 
	}

}
