<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

class PerfilController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$id = Auth::User()->id;

		$user = User::find($id);

		return view('perfil.perfil', ['user'=>$user]);

	}

	public function edit(){

		$id = Auth::User()->id;

		$user = User::find($id);

		return view('perfil.perfil_edit', ['user'=>$user]);

	}

}
