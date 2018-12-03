<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Evento;
class EventosController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$eventos = Evento::all();

		return view('eventos.painel_eventos', ['eventos' => $eventos]);
	}

	public function lista(){

		$eventos = Evento::all();
		return view('eventos.painel_evento_lista', ['eventos' => $eventos ]);

	}


	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			'image_notice'	=> 'required',
			]);

		$eventos = new Evento;
		$eventos->title = $request->title_notice;
		$eventos->body 	= $request->editor_noticia;

		//faz upload na pasta storage/public/noticia
		$eventos->image  = $this->upload($request);
		
		if( $eventos->save() ){
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
			$upload = $request->image_notice->storeAs('evento', $nameFile);
        	// Se tiver funcionado o arquivo foi armazenado em storage/app/public/noticia/nomedinamicoarquivo.extensao

        	// Verifica se NÃO deu certo o upload (Redireciona de volta)
			if ( !$upload ){
				return false;
			}else{
				return $upload;
			}
		}
	}


	public function edit($id)
	{

		$eventos = Evento::find($id);
		if(!$eventos){
			abort(404);
		}

		return response()->json($eventos);
	}

	public function update(Request $request)
	{

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$eventos = Evento::find($request->id_notice);
		$eventos->title = $request->title_notice;
		$eventos->body 	= $request->editor_noticia;

		
		if(null != $request->image_notice && !empty($request->image_notice)){

			//faz upload na pasta storage/public/noticia
			$eventos->image  = $this->upload($request);
		}

		if( $eventos->save() ){
			return redirect()->back()->with('message', 'Editado com sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'Não foi possível editar!'); 
		}
		
	}


	public function destroy($id)
	{

		$evento = Evento::find($id);

		if( $evento->delete() ){
			$result = 1;
		}else{
			$result = 0;
		}

		return response()->json($result);

	}

	public function show($id)
	{
		$evento = Evento::find($id);
		if(!$evento){
			abort(404);
		}
		return view('eventos.lista_evento')->with('evento', $evento); 
	}
}