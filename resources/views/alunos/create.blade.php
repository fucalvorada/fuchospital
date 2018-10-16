<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

<div class="col-md-6" style="margin:0 auto; padding:10px;">
	<h1>Adicionar Aluno</h1>
	<form class="" action="/alunos" method="POST">
		<input class="form-control" type="text" name="nome" value="" placeholder="Nome">
		{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
		<input class="form-control" type="text" name="matricula" value="" placeholder="matricula">
		{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}<br>
		<input  type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" class="btn btn-primary" name="name" value="Salvar">
	</form>
</div>

<a href="/alunos">Voltar</a>