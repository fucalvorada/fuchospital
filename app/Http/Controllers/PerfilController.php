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

	public function edit($id){

		$user = User::find($id);
		return response()->json($user);
	}

	public function update(Request $request){

		$this->validate($request,[
			'edit_nome' => 'required',
			'edit_email' => 'required',
			'edit_user' => 'required',
			'edit_aniver' => 'required'
			]);

		$user = User::find($request->id_user);
		$user->nomecompleto 	= $request->edit_nome;
		$user->email 			= $request->edit_email;
		$user->name 			= $request->edit_user;
		$user->nascimento 		= $request->edit_aniver;


		if(null != $request->image_notice && !empty($request->image_notice)){

		//faz upload na pasta storage/public/user
			$user->foto  = $this->upload($request);
		}

		if( $user->save() ){
			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}
	}


	public function upload(Request $request){

		// Define o valor default para a variável que contém o nome da imagem 
		$nameFile = null;

    	// Verifica se informou o arquivo e se é válido
		if ($request->hasFile('image_notice') && $request->file('image_notice')->isValid()) {

        	// Define um aleatório para o arquivo baseado no timestamps atual
			$name = uniqid(date('HisYmd'));

        	// Recupera a extensão do arquivo
			$extension = $request->image_notice->extension();

        	// Define finalmente o nome
			$nameFile = "{$name}.{$extension}";

        	// Faz o upload:
			$upload = $request->image_notice->storeAs('user', $nameFile);
        	// Se tiver funcionado o arquivo foi armazenado em storage/app/public/user/nomedinamicoarquivo.extensao

        	// Verifica se NÃO deu certo o upload (Redireciona de volta)
			if ( !$upload ){
				return false;
			}else{
				return $upload;
			}
		}
	}

	public function admUser(){

		$user = User::all();
		return view('perfil.admUser', ['user'=>$user]);
	}

	public function confirm($id){

		$mensagem = 'Tem certeza que deseja excluir?';
		return response()->json($mensagem);
	}

}
