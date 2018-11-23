@extends('layouts.padrao')

@section('content')
<article class="post_item post_item_attachment template_attachment post-497 attachment type-attachment status-inherit hentry">

    <h1 class="post_title" style='text-transform: uppercase;'>
        <span class="post_icon icon-book-2"></span>BEM VINDO,
        <P>{{ Auth::user()->name }}</P>
    </h1>

    <div class="post_featured">
        <div class="post_thumb post_nav" data-image="{{ asset('home/51.jpg')}}" data-title="51">

            <img class="wp-post-image" width="1150" alt="51.jpg" src="{{ asset('storage/home/51.jpg') }}">
<!--             <a class="post_nav_item post_nav_prev" href="">
                <span class="post_nav_info">
                    <span class="post_nav_info_title">item Anterior </span>
                    <span class="post_nav_info_description"></span>
                </span>
            </a>
            <a class="post_nav_item post_nav_next" href="">
                <span class="post_nav_info">
                    <span class="post_nav_info_title">Próximo item</span>
                    <span class="post_nav_info_description"></span>
                </span>
            </a> -->
        </div>
    </div>
</article>


@stop
