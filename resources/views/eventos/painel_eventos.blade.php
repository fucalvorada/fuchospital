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
			url: "/painel/eventos/delete/"+id,
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			beforeSend: function(){
				alert('Essa Ação não terá como ser desfeita!');
			},
			success: function(response) {

				if(response == 1){
					alert('Deletado com sucesso!');
				}else{
					alert('Não foi possível deletar!');
				}

			},
			complete: function(){
				window.location.reload();
			}
		});

	}


	//editar
	function edit(id){

		$.ajax({

			type: "POST",
			data: id,
			url: "/painel/eventos/edit/"+id,
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
	<div class="sc_reviews alignright">
		<!-- #TRX_REVIEWS_PLACEHOLDER# -->
	</div>

	@if (Session::has('message'))
	<div style="background:#fff; padding:10px; width:50%; border-radius:10px; margin-bottom:20px;">
		<p style="color:red;">{{ Session::get('message') }}</p>
	</div>
	@endif
	<div class="sc_section" style="background-color:#fff; border-radius: 4px; box-shadow: 1px 2px #e8eaec;">

		@can('create_eventos')

		<button type="button" style="margin: 10px;"  id="teste">Cadastrar</button>

		<div class="sc_section_overlay" style=" padding:40px;">


			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<table id="example"  summary="1" cellspacing="0">
				<thead>
					<tr>
						<td>Cod</td>
						<td>Titulo</td>
						<td>Evento</td>
						<td>Ações</td>
					</tr>
				</thead>
				<tbody>

					@foreach($eventos as $not)

					<tr>
						<td class="categories">
							<a href="">
								<span class="post_category">{{ $not->id }}</span>
							</a> 
						</td>
						<td >
							<a href="">
								<span class="post_category">{{ $not->title }}</span>
							</a> 
						</td>
						<td class="location">
							<a href="">{{ $not->body }} </a>
						</td>
						<td class="acoes">
							<a href="javascript:edit({{ $not->id }})" id="editando" >
								<span class="spanEdit" >Editar</span>
							</a>
							<a href="javascript:remove({{ $not->id }})" id="deletando">
								<span class="spanDel">Excluir</span>
							</a>
						</td>
					</tr>

					@endforeach

				</tbody>
			</table>
		</div>

		@else

		<div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
			<p style="color:red;">SEM PERMISSÃO!</p>

		</div>

		<script>window.location = "/home";</script>

		@endcan
	</div>
</section>

@stop

@section('modal')
<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="">Cadastrar Evento</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('cadastrar_evento') }}" enctype="multipart/form-data">

			@csrf
			<div>
				<label class="label_notice">Titulo</label>
				<input class="input_fuc" type="text" name="title_notice" id="title_notice">
			</div>
			<div>
				<label class="label_notice">Conteúdo</label>
				<textarea name="editor_noticia" id="editor_noticia" rows="10" cols="80"></textarea>
			</div>
			<div>
				<label class="label_notice">Imagem</label>
				{{ csrf_field() }}
				<input type="file" name="image_notice" id="image_notice" accept="image/*">
			</div>

			<div class="modal-footer" style="bottom: 10%;position: absolute;">
				<button type="submit" class="btn btn-primary">Gravar</button>
			</div>
		</form>
	</div>

</div>

@stop

@section('modalEdit')
<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="">Editar Evento</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('update_evento') }}" enctype="multipart/form-data">

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
			<div>
				<label class="label_notice">Imagem</label>
				{{ csrf_field() }}
				<input type="file" name="image_notice" id="" accept="image/*">
			</div>

			<div class="modal-footer" style="bottom: 10%;position: absolute;">
				<button type="submit" class="btn btn-primary">Gravar</button>
			</div>
		</form>
	</div>

</div>

@stop