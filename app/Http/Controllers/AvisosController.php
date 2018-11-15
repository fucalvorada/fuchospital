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


	public function lista(){

		$avisos = Aviso::all();
		return view('avisos.painel_avisos_lista', ['avisos' => $avisos ]);

	}


	public function edit($id)
	{

		$avisos = Aviso::find($id);
		if(!$avisos){
			abort(404);
		}

		return response()->json($avisos);
	}


	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$aviso = new Aviso;
		$aviso->title = $request->title_notice;
		$aviso->body 	= $request->editor_noticia;
		
		if( $aviso->save() ){
			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}
	}

	public function update(Request $request)
	{

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$aviso = Aviso::find($request->id_notice);
		$aviso->title = $request->title_notice;
		$aviso->body 	= $request->editor_noticia;

		if( $aviso->save() ){
			return redirect()->back()->with('message', 'Editado com sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'Não foi possível editar!'); 
		}
		
	}

	public function destroy($id)
	{

		$avisos = Aviso::find($id);

		if( $avisos->delete() ){
			$result = 1;
		}else{
			$result = 0;
		}

		return response()->json($result);

	}
}
