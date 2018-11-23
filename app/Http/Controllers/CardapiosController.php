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

	public function lista(){

		$cardapios = Cardapio::all();

		return view('cardapio.lista_cardapio', ['cardapios' => $cardapios]);

	}

	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$cardapio = new Cardapio;
		$cardapio->date = $request->title_notice;
		$cardapio->cardapio 	= $request->editor_noticia;
		
		if( $cardapio->save() ){
			return redirect()->back()->with('message', 'sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'erro!'); 
		}
	}

	public function edit($id)
	{

		$cardapio = Cardapio::find($id);
		if(!$cardapio){
			abort(404);
		}

		return response()->json($cardapio);
	}

	public function update(Request $request)
	{

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$cardapio = Cardapio::find($request->id_notice);

		$cardapio->date = $request->title_notice;
		$cardapio->cardapio = $request->editor_noticia;

		if( $cardapio->save() ){
			return redirect()->back()->with('message', 'Editado com sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'Não foi possível editar!'); 
		}
		
	}

	public function destroy($id)
	{

		$cardapio = Cardapio::find($id);

		if( $cardapio->delete() ){
			$result = 1;
		}else{
			$result = 0;
		}

		return response()->json($result);

	}
}
