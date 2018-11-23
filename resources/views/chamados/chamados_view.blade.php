
@extends('layouts.padrao')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/painel_noticia.css')}}">

<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>

<script type="text/javascript">
	$(document).ready(function() {

		CKEDITOR.replace( 'editor_noticia' );
		CKEDITOR.config.autoParagraph = false;

		$('#example').DataTable({
			"entriesSearch":false,
			"lengthChange":false,
			"info":false,
			"dom": 'Bfrtip',
			"paginate":true,
			"oLanguage": {

				"sInfo": "_START_ - _END_ /_TOTAL_",
				"sInfoEmpty": "Tabela vazia",
				"sSearch" : "Pesquisar",
				"sInfoFiltered" : ""

			},
			"columnDefs": [
			{
				"targets": [ 2 ],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [ 3 ],
				"visible": true
			}
			]
		});

		$("#teste").click( function(ev){
			ev.preventDefault();

			var id = $(this).attr("href");

			var alturaTela = $(document).height();
			var larguraTela = $(window).width();

        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000); 
        $('#mascara').fadeTo("slow",0.8);

        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );

        $(id).css({'top':top,'left':left});
        $(id).show(); 
        $(".window").show();  
    });

		$('.close').click(function(ev){
			ev.preventDefault();
			$("#mascara").hide();
			$(".window").hide();
		});

		$('.close').click(function(ev){
			ev.preventDefault();
			$("#mascara").hide();
			$(".window2").hide();
		});

	} );

</script>

<style type="text/css">

	#example_filter{
		padding: none;
	}
</style>

<section class="post_content" itemprop="articleBody">

	<div id="bbpress-forums">

		@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		<form method="post"  class="form_painel_notice" action="{{ route('responder_chamado') }}" enctype="multipart/form-data">

			<input type="hidden" name="id_chamado" value="{{ $chamados[0]->id}}">
			<div class=""  style="margin-bottom:10px; margin-top: 10%;">
				<label class="label_notice" style="color:#fff; font-weight:bold;font-size:13px;">Responder</label>
				<textarea name="resposta" cols="80" rows="8"></textarea>
			</div>
			<div class="bbp-search-form"  style="margin-bottom:10px;">
				<button type="submit" style="margin: 10px;"  id="">Gravar</button>
			</div>

		</form>

		<ul id="forums-list-0" class="bbp-forums">

			<li class="bbp-header">

				<ul class="forum-titles">
					<li class="bbp-forum-info">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Chamados
							</font>
						</font>
					</li>
				</ul>

			</li>

			<li class="bbp-body" style="background: #fff;">

				<ul id="bbp-forum-1725" class="loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish post-1725 forum type-forum status-publish hentry">

					<li class="bbp-forum-info">
						<a class="bbp-forum-title" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $chamados[0]->title}}</font></font></a>

						<div class="bbp-forum-content">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">{{ $chamados[0]->body}}
								</font>
							</font>
						</div>

						@forelse($chamados as $not)
						<p style="font-weight:bold; font-size:13px;">Resposta:</p>
						<p >{{$not->resposta}}</p>

						@empty

						<div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
							<p style="color:red;">Não existem respostas para esse chamado!</p>

						</div>
						@endforelse

					</li>


					<li class="bbp-forum-freshness">
						<font>
							<font>
							</font>
						</font>
						<p class="bbp-topic-meta">
							<span class="bbp-topic-freshness-author">
								<img alt="" src='{{ asset("storage/{$chamados[0]->foto} ") }}' height="14" width="30s">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">{{ $chamados[0]->name}}</font>
								</font>
							</span>

						</p>
					</li>

				</ul>

			</li>

			<li class="bbp-footer">

				<div class="tr">
					<p class="td colspan4">&nbsp;</p>
				</div>

			</li>

		</ul>

	</div>
</section>

@stop

