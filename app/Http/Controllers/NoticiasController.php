<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Noticia;

use Illuminate\Support\Facades\Gate;

class NoticiasController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$noticias = Noticia::all();
		$this->authorize('create_notice');

		return view('noticias.painel_noticia', ['noticias' => $noticias]);

	}

	public function lista(){

		$noticias = Noticia::orderBy('created_at', 'desc')->get();
		return view('noticias.painel_noticia_lista', ['noticias' => $noticias ]);

	}

	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			'image_notice'	=> 'required',
			]);

		$noticia = new Noticia;
		$noticia->title = $request->title_notice;
		$noticia->body 	= $request->editor_noticia;

		//faz upload na pasta storage/public/noticia
		$noticia->image  = $this->upload($request);
		
		if( $noticia->save() ){
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
			$upload = $request->image_notice->storeAs('noticia', $nameFile);
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

		$noticia = Noticia::find($id);
		if(!$noticia){
			abort(404);
		}

		return response()->json($noticia);
	}

	public function update(Request $request)
	{

		$this->validate($request,[
			'title_notice' => 'required',
			'editor_noticia' => 'required',
			]);

		$noticia = Noticia::find($request->id_notice);
		$noticia->title = $request->title_notice;
		$noticia->body 	= $request->editor_noticia;

		if(null != $request->image_notice && !empty($request->image_notice)){

			//faz upload na pasta storage/public/noticia
			$noticia->image  = $this->upload($request);
		}

		if( $noticia->save() ){
			return redirect()->back()->with('message', 'Editado com sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'Não foi possível editar!'); 
		}
		
	}

	public function destroy($id)
	{

		$noticia = Noticia::find($id);

		if( $noticia->delete() ){
			$result = 1;
		}else{
			$result = 0;
		}

		return response()->json($result);

	}

	public function show($id)
	{
		$noticia = Noticia::find($id);
		if(!$noticia){
			abort(404);
		}
		return view('noticias.lista_noticia')->with('noticia', $noticia); 
	}

}
