
@extends('layouts.padrao')

@section('content')

<section class="post_content" itemprop="articleBody">

	<div id="bbpress-forums">


		<div class="bbp-search-form"  style="margin-bottom:10px;">
			<form role="search" method="get" id="bbp-search-form" action="">
				<div>
					<font style="vertical-align: inherit;">
						<font style="vertical-align: inherit;">
							<input class="button" type="submit" id="bbp_search_submit" value="Novo chamado"></font>
						</font>
					</div>
				</form>

			</div>

			<ul id="forums-list-0" class="bbp-forums">

				<li class="bbp-header">

					<ul class="forum-titles">
						<li class="bbp-forum-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chamados</font></font></li>
					</ul>

				</li>

				<li class="bbp-body" style="background: #fff;">


					@foreach($chamados as $not)
					<ul id="bbp-forum-1725" class="loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish post-1725 forum type-forum status-publish hentry">

						<li class="bbp-forum-info">
							<a class="bbp-forum-title" href="http://alliance.themerex.net/forums/forum/business-travel-donec-mattis-quis-lorem-sed/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $not->title}}</font></font></a>

							<div class="bbp-forum-content">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">{{ $not->body}}
									</font>
								</font>
							</div>

						</li>

						<li class="bbp-forum-freshness">

							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">

								</font>
							</font>
							<p class="bbp-topic-meta">
								<span class="bbp-topic-freshness-author">
									<img alt="" src='{{ asset("storage/{$not->foto} ") }}' height="14" width="30s">
									<font style="vertical-align: inherit;">
										<font style="vertical-align: inherit;">{{ $not->name}}</font>
									</font>
								</span>

							</p>
						</li>

					</ul>
					@endforeach

				</li>

				<li class="bbp-footer">

					<div class="tr">
						<p class="td colspan4">&nbsp;</p>
					</div>

				</li>

			</ul>

		</div>
	</section>

	@stop