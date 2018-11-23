@extends('layouts.padrao')

@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('css/arquivos.css')}}">


<div id="buddydrive-main" class="mini">
	<nav class="buddydrive-toolbar">
		<h2>Arquivos</h2>
	</nav>

	@foreach($arquivos as $not)
	<ul id="buddydrive-browser">
		<li class="buddydrive-item not-bulk-editable">

			<div class="buddydrive-icon">

				<a href="">
					<img src='{{ asset("storage/aviso/document.png") }}' width="30px"></a>
				</div>


				<div class="buddydrive-share-dialog buddydrive-hide">
					
					<div class="buddydrive-content">
						<div class="buddydrive-title">
							<span class="buddydrive-name">

							<a href='{{ asset("storage/{$not->arquivo}") }}' download>

									<font style="vertical-align: inherit;">
										{{ $not->name}}
									</font>
								</a>
							</span>
						</div>
					</div>
				</div>


			</li>
		</ul>
		@endforeach
	</div>



	@stop

