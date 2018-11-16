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

	public function lista($data =  null){

		$user = User::orderBy('nascimento', 'ASC')->get();

		if($data != 0){

			if($data <= 10){
				$data = '0'.$data;
			}

			$user = User::findDataNasci($data);
		}

		return view('aniver.aniver_lista', ['user' => $user]);

	}
}
