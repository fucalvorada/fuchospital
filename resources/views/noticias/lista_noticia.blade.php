
@extends('layouts.padrao')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/painel_noticia.css')}}">

<div class="btens">
	<a href="{{ route('lista') }}" >Voltar para lista</a>	
</div>

<article class="post_item post_item_excerpt post_featured_left post_format_standard even post-378 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-design tag-world">
	<div class="post_featured">
		<div class="post_thumb" data-image='{{ asset("storage/{$noticia->image}") }}' data-title="">
			<a class="hover_icon hover_icon_link" href="">
				<img class="wp-post-image" width="750" height="422" alt="" src='{{ asset("storage/{$noticia->image}") }}'>
			</a>						
		</div>
	</div>
	
	<div class="post_content clearfix">
		<h2 class="post_title">
			<a href="">
				<b>{{ ucwords( $noticia->title ) }}</b>
			</a>
		</h2>			
		<div class="post_info post_info_top">
			<div class="post_info_item post_info_posted">
				<a href="" class="post_info_date">{{  date( 'd/m/Y' , strtotime($noticia->created_at)) }}</a>
			</div>
		</div>

		<div class="post_descr">
			<p>{{ $noticia->body }}</p>
		</div>
	</div>
</article>

@stop