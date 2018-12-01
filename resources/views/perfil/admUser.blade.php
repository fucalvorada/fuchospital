
@extends('layouts.padrao')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/painel_noticia.css')}}">

<script type="text/javascript">

	$(document).ready(function() {
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

		$('.close').click(function(ev){
			ev.preventDefault();
			$("#mascara").hide();
			$(".window3").hide();
		});



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

			}
		});

	} );
	
	function edit(id){

		$.ajax({

			type: "POST",
			data: id,
			url: "/perfil/edit/"+id,
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(response) {
				$('#edit_nome').val(response.nomecompleto);
				$('#edit_email').val(response.email);
				$('#edit_user').val(response.name);
				$('#id_user').val(response.id);
				$('#edit_aniver').val(response.nascimento);

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

	function remove(id){
		$.ajax({

			type: "POST",
			data: id,
			url: "/perfil/confirm/"+id,
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(response) {

				$('#mensagem').val(response.mensagem);

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
				$(".window3").show();

			}
		});
	}

</script>


<div class="page_content_wrap" style="background:#fff;"  >


	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif


	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<section class="post_content" itemprop="articleBody">
		<div class="sc_reviews alignright">
			<!-- #TRX_REVIEWS_PLACEHOLDER# -->
		</div>

		@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		<div class="sc_section" style="background-color:#fff; border-radius: 4px; box-shadow: 1px 2px #e8eaec;">

			<button type="button" style="margin: 10px;"  id="teste">Novo usuário</button>

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

				<table id="example"  cellspacing="0">
					<thead>
						<tr>
							<td>Cod</td>
							<td>Nome</td>
							<td>Ações</td>
						</tr>
					</thead>
					<tbody>

						@forelse($user as $not)

						<tr>
							<td class="categories">
								<a href="">
									<span class="post_category">{{ $not->id }}</span>
								</a> 
							</td>
							<td >
								<a href="">
									<span class="post_category">{{ $not->nomecompleto }}</span>
								</a> 
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
						@empty

						<div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
							<p style="color:red;">Não existem usuários!</p>

						</div>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>	
@stop

@section('modalEdit')
<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="">Editar Usuário</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('perfil_update') }}" enctype="multipart/form-data">

			@csrf
			<div>
				<input type="hidden" name="id_user" id="id_user">
				<label class="label_notice">Nome</label>
				<input class="input_fuc" type="text" name="edit_nome" id="edit_nome">
			</div>
			<div>
				<label class="label_notice">Usuário</label>
				<input class="input_fuc" type="text" name="edit_user" id="edit_user">
			</div>
			<div>
				<label class="label_notice">Email</label>
				<input class="input_fuc" type="text" name="edit_email" id="edit_email">
			</div>
			<div>
				<label class="label_notice">Data Nascimento</label>
				<input class="input_fuc" type="date" name="edit_aniver" id="edit_aniver">
			</div>
			<div>
				<label class="label_notice">Foto</label>
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

@section('modalConfirma')
<div class="modal-content">
	<div class="modal-header">
		<h5 class="" id="mensagem">Editar Usuário</h5>
	</div>
	<div style="float: right;">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<form method="post"  class="form_painel_notice" action="{{ route('perfil_update') }}" enctype="multipart/form-data">

			@csrf
		</form>
	</div>

</div>

@stop