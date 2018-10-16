<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return  $this->verificaView();
    }

    public function verificaView(){
       $alunos = Aluno::all();
       $view;

        if(count($alunos) != 0){
        return view('alunos.index', ['todosalunos' => $alunos]);
        }else{
        return view('alunos.create');
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nome' => 'required',
        'matricula' => 'required',
        ]);

      $alunos = new Aluno;
      $alunos->nome = $request->nome;
      $alunos->matricula = $request->matricula;
      $alunos->save();
      return redirect('alunos')->with('message', 'Aluno cadastrado com sucesso!');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Aluno::find($id);
        if(!$alunos){
            abort(404);
        }
        return view('alunos.details')->with('detailpage', $alunos); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alunos = Aluno::find($id);
        if(!$alunos){
            abort(404);
        }
        return view('alunos.edit')->with('detailpage', $alunos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'nome' => 'required',
        'matricula' => 'required',
        ]);

      $alunos = Aluno::find($id);
      $alunos->nome = $request->nome;
      $alunos->matricula = $request->matricula;
      $alunos->save();
      return redirect('alunos')->with('message', 'Aluno editado com sucesso!');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $alunos = Aluno::find($id);
        $alunos->delete();
        return redirect('alunos')->with('message', 'Aluno apagado com sucesso!');
    }
}
