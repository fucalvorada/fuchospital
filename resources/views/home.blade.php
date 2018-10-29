@extends('layouts.padrao')

@section('content')
<article class="post_item post_item_attachment template_attachment post-497 attachment type-attachment status-inherit hentry">

    <h1 class="post_title" style='text-transform: uppercase;'>
        <span class="post_icon icon-book-2"></span>BEM VINDO, {{ Auth::user()->name }}
    </h1>

    <div class="post_featured">
        <div class="post_thumb post_nav" data-image="http://alliance.themerex.net/wp-content/uploads/2015/05/51.jpg" data-title="51">
            <img class="wp-post-image" width="1150" alt="51.jpg" src="http://alliance.themerex.net/wp-content/uploads/2015/05/51.jpg" itemprop="image">                     <a class="post_nav_item post_nav_prev" href="http://alliance.themerex.net/49/#top_of_page">
            <span class="post_nav_info">
                <span class="post_nav_info_title">Previous item</span>
                <span class="post_nav_info_description">49</span>
            </span>
        </a>
        <a class="post_nav_item post_nav_next" href="http://alliance.themerex.net/50/#top_of_page">
            <span class="post_nav_info">
                <span class="post_nav_info_title">Next item</span>
                <span class="post_nav_info_description">50</span>
            </span>
        </a>
    </div>
</div>
</article>


@stop
