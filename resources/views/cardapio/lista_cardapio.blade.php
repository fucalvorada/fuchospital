@extends('layouts.padrao')

@section('content')


<div class="sc_section" style="margin-bottom:40px;background-color:#fff; border-radius: 4px; box-shadow: 1px 2px #e8eaec;width:1508px;">

	<div class="sc_section_overlay" style=" padding:30px;">

		<div class="sc_section_content">

			<h5 class="sc_title sc_title_regular" style="margin-bottom:25px;color:#9b9ead;font-family: Lato, sans-serif;">Cardápio</h5>

			<ul style="list-style:none;">
				@foreach($cardapios as $not)
				<li>

					<div id="sc_blogger_593908105" class="sc_blogger layout_date template_date  sc_blogger_horizontal no_description" data-size="0x0" style="margin-right:20px;margin-bottom:25px;margin-left:20px;">	

						<div class="post_item sc_blogger_item
						sc_blogger_item_last" 
						style="width:16.666666666667%">
				
						<div class="sc_blogger_date">
							<span class="day_month">{{ date( 'd/m' , strtotime($not->date)) }}</span>
							<span class="year">{{ date( 'Y' , strtotime($not->date)) }}</span>
						</div>

						<div class="post_content" style="background:#f5393d;">
							<h6 class="post_title sc_title sc_blogger_title">
								<a href="">{{ $not->cardapio}}</a>				
							</h6>	
						</div>
					</div>		
				</div>

			</li>
			@endforeach
		</ul>
	</div>
</div>
</div>

@stop

