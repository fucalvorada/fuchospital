
@extends('layouts.padrao')

@section('content')


<div class="page_content_wrap" style="background:#fff;"  >


	<div class="content_wrap">
		<div class="content">
			<article class="bp_members type-bp_members itemscope post_item post_item_single post_featured_left post_format_standard post-0 page type-page status-publish hentry" >
				<h2 itemprop="name" class="post_title entry-title">
					{{ Auth::user()->name }}
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
									</div><!-- #item-header-avatar -->

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
											<a id="public" href="{{ route('edit_perfil') }}">Editar</a>
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