<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Permission;
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

		//$user = User::find($id);
		$html = "<p>Permissões</p><table>";
		$permission  = User::PermissionUser($id);

		foreach ($permission as $key => $value) {
			
			$html .= "<tr><td>".$value->label."</td></tr>";

		}

		$html .= "</table>";

		$user = array(
			'user' => User::find($id),
			'permission'  => $html
			);

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

	public function cadastrarUser(Request $request){


		$this->validate($request,[
			'cad_nome' 		=> 'required',
			'email' 	=> 'required',
			'cad_password' 	=> 'required',
			'cad_user' 	=> 'required',
			'cad_aniver'	=>	'required',
			'cad_nivel'		=>	'required'
			]);	
			//dd($request);

		$user = new User;
		$user->name 		= $request->cad_user;
		$user->nomecompleto = $request->cad_nome;
		$user->email 		= $request->email;
		$user->password 	= Hash::make($request->cad_password);
		$user->nascimento 	= $request->cad_aniver;
			//faz upload na pasta storage/public/perfil
		$user->foto  		= $this->upload($request);

		if( $user->save() ){
			if($request->cad_nivel == 1){

				$u = User::orderBy('created_at', 'desc')->first();
				User::insert_adm($u);

			}else if($request->cad_nivel == 2){

				$u = User::orderBy('created_at', 'desc')->first();
				User::insert_dir($u);
			}else{
				$u = User::orderBy('created_at', 'desc')->first();
				User::insert_pad($u);
			}

			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}

	}

	public function admUser(){

		$user = User::all();
		return view('perfil.admUser', ['user'=>$user]);
	}

	public function registrar(){

		return view('perfil.registrar');

	}

	public function confirm($id){

		$mensagem = 'Tem certeza que deseja excluir?';
		return response()->json($mensagem);
	}

}
