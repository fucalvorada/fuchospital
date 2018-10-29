<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Noticia;

class NoticiasController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$noticias = Noticia::all();

		return view('noticias.painel_noticia', ['noticias' => $noticias]);

	}

	public function lista(){

		$noticias = Noticia::all();

		return view('noticias.painel_noticia_lista', ['noticias' => $noticias]);

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

}
