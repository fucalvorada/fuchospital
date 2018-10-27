@extends('layouts.padrao')

@section('content')

<script type="text/javascript">
	$(document).ready(function() {

		$('#example').DataTable({
			"entriesSearch":false,
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

} );



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
	<div class="sc_section" style="background-color:#fff; border-radius: 4px; box-shadow: 1px 2px #e8eaec;">

		<button type="button" style="margin: 10px;"  id="teste">Cadastrar</button>

		<div class="sc_section_overlay" style=" padding:40px;">
			<table id="example"  summary="1" cellspacing="0">
				<thead>
					<tr>
						<td>Cod</td>
						<td>Titulo</td>
						<td>Notícia</td>
						<td>Ações</td>
					</tr>
				</thead>
				<tbody>

					@foreach($noticias as $not)

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
						<td class="">
							<a href="" >
								<span style="background: #28c3d4"  ></span>
							</a>
							<a href="">
								<span style="background: #0003d4"></span>
							</a>
						</td>
					</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</section>


<style type="text/css">
	

	.window{
		display:none;
		width: 50%;
		height: 353px;
		position: absolute;
		left: 25%;
		top: 10%;
		background: #FFF;
		z-index: 9900;
		padding: 10px;
		border-radius: 10px;
	}

	#mascara{
		display:none;
		position:absolute;
		left:0;
		top:0;
		z-index:9000;
		background-color:#000;
	}

	.fechar{display:block; text-align:right;}
</style>



@stop