{{ Session::get('message') }}


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<h1 style="text-align:center;">Alunos</h1>

<a href="adicionar" >Adicionar</a>



<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Matricula</th>
            <th>Açoes</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todosalunos as $aluno)
        <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->matricula }}</td>
            <td><a  href="/alunos/{{ $aluno->id }}/edit">Editar</a></td>
            <td>
                <form action="/alunos/{{ $aluno->id }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="btn-primary" type="submit" name="name" value="Apagar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>


