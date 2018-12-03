@extends('layouts.padrao')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/painel_noticia.css')}}">

@if (Session::has('message'))
<div style="background:#fff; padding:10px; width:50%; border-radius:10px; margin-bottom:20px;">
    <p style="color:red;">{{ Session::get('message') }}</p>
</div>
@endif
<div class="modal-content" style="background:#fff;">


    @can('create_eventos')

    <div class="modal-header">
        <h5 class="" id="">Cadastrar Usuário</h5>
    </div>
    <div class="modal-body">
        <form method="post"  class="form_painel_notice" action="{{ route('cadastrar_user') }}" enctype="multipart/form-data">

            @csrf
            <div>
                <input type="hidden" name="id_user" id="id_user">
                <label class="label_notice">Nome</label>
                <input class="input_fuc" type="text" name="cad_nome" id="edit_nome">
            </div>
            <div>
                <label class="label_notice">Usuário</label>
                <input class="input_fuc" type="text" name="cad_user" id="edit_user">
            </div>
            <div>
                <label class="label_notice">Email</label>
                <input class="input_fuc" type="text" name="email" id="email">
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                <div class="col-md-6">
                    <input id="cad_password" type="password" class="form-control" name="cad_password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div>
                <label class="label_notice">Data Nascimento</label>
                <input class="input_fuc" type="date" name="cad_aniver" id="edit_aniver">
            </div>

            <div>
                <label class="label_notice">Nível de acesso</label>
                <select name="cad_nivel" id="cad_nivel">
                    <option value="3">Padrão</option>
                    <option value="1">Administrador</option>
                    <option value="2">Diretor</option>
                    
                </select>
            </div>

            <div>
                <label class="label_notice">Foto</label>
                {{ csrf_field() }}
                <input type="file" name="image_notice" id="" accept="image/*">
            </div>

            <div class="modal-footer" style="bottom: 10%;position: absolute;right: 45%;">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>

    @else

    <div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
        <p style="color:red;">SEM PERMISSÃO!</p>

    </div>

    <script>window.location = "/home";</script>

    @endcan

</div>

@endsection
