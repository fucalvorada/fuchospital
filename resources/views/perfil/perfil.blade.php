
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

				console.log(response);
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

</script>


<div class="page_content_wrap" style="background:#fff;"  >
		<button type="button" style="margin-bottom: 30px;margin-right: 10px; float:right;"><a style="color:#fff;" href="{{ route('adm_user') }}">Administrar Usuários</a></button>


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

	<div class="content_wrap">
		<div class="content">
			<article class="bp_members type-bp_members itemscope post_item post_item_single post_featured_left post_format_standard post-0 page type-page status-publish hentry" >
				<h2 itemprop="name" class="post_title entry-title">
					{{ Auth::user()->nomecompleto }}
				</h2>

				<section class="post_content" itemprop="articleBody">
					<div id="buddypress">
						<div id="item-header" role="complementary">
							<div id="cover-image-container">
								<a id="header-cover-image" href=""></a>

								<div id="item-header-cover-image">
									<div id="item-header-avatar">
										<a href="">
											<img src='{{ asset("storage/{$user->foto} ") }}' class="avatar user-6-avatar avatar-150 photo" width="150" height="150" alt="Profile picture of Alex Grey (Support)" />
										</a>

									</div>
									<div id="item-header-content">

										<div id="item-buttons"></div>

										<div id="item-meta">

											<div id="latest-update">


											</div>

										</div>
									</div>

								</div>
							</div>


							<div id="template-notices" role="alert" aria-atomic="true">

							</div>

						</div>

						<div id="item-body">

							<div class="profile">

								<div class="bp-widget base">

									<h2>Dados</h2>

									<table class="profile-fields">
										<tr class="field_1 field_name required-field visibility-public field_type_textbox">

											<td class="label">Nome</td>

											<td class="data">
												<p>{{ $user->nomecompleto }}</p>
											</td>

										</tr>

										<tr class="field_1 field_name required-field visibility-public field_type_textbox">

											<td class="label">User</td>

											<td class="data">
												<p>{{ $user->name }}</p>
											</td>

										</tr>

										<tr class="field_2 field_age required-field visibility-public alt field_type_number">

											<td class="label">Email</td>

											<td class="data">
												<p>{{ $user->email}}</p>
											</td>

										</tr>

									</table>


									<div class="item-list-tabs no-ajax" id="subnav" aria-label="Member secondary navigation" role="navigation">
										<ul>
											<li id="public-personal-li"  class="current selected">

												<a id="public" href="javascript:edit({{ $user->id }})" id="editando" >
													<span class="spanEdit" >Editar</span>
												</a>
											</li>	
										</ul>
									</div>
								</div>

							</div><!-- .profile -->


						</div><!-- #item-body -->


					</div><!-- #buddypress -->

				</section> 
			</article> 	
			<section class="related_wrap related_wrap_empty"></section>

		</div> <!-- </div> class="content"> -->
	</div> <!-- </div> class="content_wrap"> -->			
</div>		<!-- </.page_content_wrap> -->

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