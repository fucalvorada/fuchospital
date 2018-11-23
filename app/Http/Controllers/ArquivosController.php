<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Arquivos;

class ArquivosController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(){

		$arquivos = Arquivos::all();

		return view('arquivos.arquivos_lista', ['arquivos' => $arquivos]);

	}

	public function lista(){

		$arquivos = Arquivos::all();

		return view('arquivos.painel_arquivos', ['arquivos' => $arquivos]);

	}

	public function cadastrar(Request $request){

		$this->validate($request,[
			'title_notice' => 'required',
			'image_notice'	=> 'required',
			]);

		$arquivo = new Arquivos;
		$arquivo->name = $request->title_notice;

		//faz upload na pasta storage/public/arquivos
		$arquivo->arquivo  = $this->upload($request);
		
		if( $arquivo->save() ){
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
			$upload = $request->image_notice->storeAs('arquivos', $nameFile);
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

		$arquivo = Arquivos::find($id);
		if(!$arquivo){
			abort(404);
		}

		return response()->json($arquivo);
	}

	public function update(Request $request){
		$this->validate($request,[
			'title_notice' => 'required',
			]);

		$arquivo = Arquivos::find($request->id_notice);
		$arquivo->name = $request->title_notice;

		if( $arquivo->save() ){
			return redirect()->back()->with('message', 'Editado com sucesso!'); 
		}else{
			return redirect()->back()->with('message', 'Não foi possível editar!'); 
		}
	}

	public function destroy($id)
	{

		$noticia = Arquivos::find($id);

		if( $noticia->delete() ){
			$result = 1;
		}else{
			$result = 0;
		}

		return response()->json($result);

	}

}
