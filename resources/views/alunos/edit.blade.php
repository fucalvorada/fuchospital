<h1>Editar Aluno</h1>
<form action="/alunos/{{ $detailpage->id }}" method="POST">
    <input type="text" name="nome" value="{{ $detailpage->nome }}" placeholder="Nome">
    {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
    <input type="text" name="matricula" value="{{ $detailpage->matricula }}" placeholder="matricula">
    {{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}<br>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="name" value="Salvar">
</form>