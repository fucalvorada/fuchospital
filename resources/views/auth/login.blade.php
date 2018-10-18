@extends('layouts.app')

@section('content')

<style type="text/css">

 .formin{
    bottom: 0;
    position: absolute;
    width: 42%;
}


</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 formin">
            <div class="card">
            <div class="card-header">Entrar</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Usuário</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('rodape')

<div id="gkBottom2">
    <div class="gkCols6 gkPage">
        <div class="box bigtitle double gkmod-1 nomargin"><h3 class="header">Hospital de <strong>Alvorada</strong></h3><div class="content">

            <div class="custombigtitle double"  >

                <address>
                    <p>Rua Jarci Zamin, 170 &nbsp;| &nbsp;Bairro Três Figueiras <br />Alvorada / RS &nbsp;| &nbsp;Cep 94801970 <br />(51) 34121300<br />
                        Administrado pela Fundação Universitária de Cardiologia</p>

                    </address>  
                </div>
            </div></div>

                <!--[if IE 8]>
                <div class="ie8clear"></div>
                <![endif]-->
            </div>
        </div>

        @endsection


