<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Chamado;
use App\User;
use App\Resposta;
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

	public function lista(){

		$chamados = Chamado::chamdoUserAll();

		return view('chamados.chamados', ['chamados' => $chamados]);

	}


	public function view($id){

		$chamados = Chamado::chamdoUserView($id);

		return view('chamados.chamados_view', ['chamados' => $chamados]);

	}

	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$chamado = new Chamado;
		$chamado->title = $request->title_notice;
		$chamado->body 	= $request->editor_noticia;
		$chamado->user_id = Auth::User()->id;
		
		if( $chamado->save() ){
			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}
	}

	public function responder(Request $request){

		$this->validate($request,[
			'resposta' => 'required',
			]);

		$resposta = new Resposta;
		$resposta->id_chamado = $request->id_chamado;
		$resposta->resposta = $request->resposta;
		
		if( $resposta->save() ){
			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}
	}

}
