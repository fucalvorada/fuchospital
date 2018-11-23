

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


	function remove(id){

		$.ajax({

			type: "POST",
			data: id,
			url: "/painel/noticias/delete/"+id,
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(response) {

				if(response == 1){
					alert('Deletado com sucesso!');
				}else{
					alert('Não foi possível deletar!');
				}

			}
		});

	}


	//editar
	function edit(id){

		$.ajax({

			type: "POST",
			data: id,
			url: "/painel/noticias/edit/"+id,
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(response) {

				$('#title_id').val(response.title);
				$('#body_id').val(response.body);
				$('#id_notice').val(response.id);

				var id = $(this).attr("href");

				var alturaTela = $(document).height();
				var larguraTela = $(window).width();

				$('#mascara').css({'width':larguraTela,'height':alturaTela});
				$('#mascara').fadeIn(1000); 
				$('#mascara').fadeTo("slow",0.8);

				var left = ($(window).width() /2) - ( $(id).width() / 2 );
				var top = ($(window).height() / 2) - ( $(id).height() / 2 );

				$(id).css({'top':top,'left':left});
				$(id).show(); 
				$(".window2").show();
			}
		});
	}

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


				@forelse($chamados as $not)
				<ul id="bbp-forum-1725" class="loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish post-1725 forum type-forum status-publish hentry">

					<li class="bbp-forum-info">
						<a class="bbp-forum-title" href="{{ route('chamado_show',$not->id )}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $not->title}}</font></font></a>

						<div class="bbp-forum-content">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">{{ $not->body}}
								</font>
							</font>
						</div>

					</li>


					<li class="bbp-forum-freshness">
						<font>
							<font>
							</font>
						</font>
						<p class="bbp-topic-meta">
							<span class="bbp-topic-freshness-author">
								<img alt="" src='{{ asset("storage/{$not->foto} ") }}' height="14" width="30s">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">{{ $not->name}}</font>
								</font>
							</span>

						</p>
					</li>

				</ul>
				@empty

				<div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
					<p style="color:red;">Não existem chamados!</p>

				</div>
				@endforelse

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

@section('modal')


<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="">Reportar chamado</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('reportar_chamado') }}" enctype="multipart/form-data">

			@csrf
			<div>
				<label class="label_notice">Titulo</label>
				<input class="input_fuc" type="text" name="title_notice" id="title_notice">
			</div>
			<div>
				<label class="label_notice">Conteúdo</label>
				<textarea name="editor_noticia" id="editor_noticia" rows="10" cols="80"></textarea>
			</div>

			<div class="modal-footer" style="bottom: 10%;position: absolute;">
				<button type="submit" class="btn btn-primary">Reportar</button>
			</div>
		</form>
	</div>

</div>

@stop

@section('modalEdit')
<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="">Editar Notícia</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('update') }}" enctype="multipart/form-data">

			@csrf
			<div>
				<label class="label_notice">Titulo</label>
				<input class="input_fuc" type="text" name="title_notice" id="title_id">
				<input type="hidden" name="id_notice" id="id_notice">

			</div>
			<div>
				<label class="label_notice">Conteúdo</label>
				<textarea name="editor_noticia" id="body_id" rows="10" cols="80"></textarea>
			</div>

			<div class="modal-footer" style="bottom: 10%;position: absolute;">
				<button type="submit" class="btn btn-primary">Gravar</button>
			</div>
		</form>
	</div>

</div>

@stop