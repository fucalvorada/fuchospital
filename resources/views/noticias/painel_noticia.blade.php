@extends('layouts.padrao')

@section('content')

<script type="text/javascript">
	$(document).ready(function() {

		$('#example').DataTable();


		$('#teste').on('click', function(){

			alert('bombou essa porra');
		});

	} );



</script>

<section class="post_content" itemprop="articleBody">
	<div class="sc_reviews alignright">
		<!-- #TRX_REVIEWS_PLACEHOLDER# -->
	</div>
	<div class="sc_section" style="background-color:#fff; border-radius: 4px; box-shadow: 1px 2px #e8eaec;">
		<div class="sc_section_overlay" style=" padding:40px;">

			<button id="teste">Cadastrar</button>
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


@stop