@extends('layouts.padrao')

@section('content')

@foreach($avisos as $not)

<article class="post_item post_item_excerpt post_featured_left post_format_standard even post-378 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-design tag-world">
	<div class="post_featured2">
		<div class="post_thumb" data-image='{{ asset("storage/aviso/download.jfif") }}' data-title="">
			<a class="hover_icon hover_icon_link" href="">
				<img class="wp-post-image"  alt="" src='{{ asset("storage/aviso/download.jfif") }}'>
			</a>						
		</div>
	</div>

	
	<div class="post_content clearfix">
		<h2 class="post_title">
			<a href="">
				<b>{{ ucwords( $not->title ) }}</b>
			</a>
		</h2>			
		<div class="post_info post_info_top">
			<div class="post_info_item post_info_posted">
				<a href="" class="post_info_date">{{ date( 'd/m/Y' , strtotime($not->created_at)) }}</a>
			</div>
		</div>

		<div class="post_descr">

<!-- 			<p>{{ \Illuminate\Support\Str::words($not->body, 10, "...")}}</p>
-->			
<p>{{ $not->body}}</p>

<!-- <a href="{{ route('show', $not->id  ) }}" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium read_more" style="color:#fff;background-color:#67d3e0; box-shadow: 0 3px rgb(73,181,194) ;">LEIA MAIS</a> -->
</div>
</div>
</article>

@endforeach

@stop

