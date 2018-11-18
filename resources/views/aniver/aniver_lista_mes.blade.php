@extends('layouts.padrao')

@section('content')

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; Feed" href="http://alliance.themerex.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; Comments Feed" href="http://alliance.themerex.net/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; Team Leaders Comments Feed" href="http://alliance.themerex.net/team-leaders/feed/" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/aniver')}}">
<script type="text/javascript">
	window._wpemojiSettings = {
		"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
		"ext": ".png",
		"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
		"svgExt": ".svg",
		"source": {
			"concatemoji": "http:\/\/alliance.themerex.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"
		}
	};
	! function(a, b, c) {
		function d(a, b) {
			var c = String.fromCharCode;
			l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
			var d = k.toDataURL();
			l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
			var e = k.toDataURL();
			return d === e
		}

		function e(a) {
			var b;
			if (!l || !l.fillText) return !1;
			switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
				case "flag":
				return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
				case "emoji":
				return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
			}
			return !1
		}

		function f(a) {
			var c = b.createElement("script");
			c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
		}
		var g, h, i, j, k = b.createElement("canvas"),
		l = k.getContext && k.getContext("2d");
		for (j = Array("flag", "emoji"), c.supports = {
			everything: !0,
			everythingExceptFlag: !0
		}, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
				c.DOMReady = !0
			}, c.supports.everything || (h = function() {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
				"complete" === b.readyState && c.readyCallback()
			})), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>

	<h1 class="post_title" style="text-transform: uppercase;">
		<span class="post_icon icon-book-2"></span>Aniversariantes
	</h1>

	<div class="sc_team sc_team_style_2">
		<div class="sc_columns columns_wrap">

			@forelse($user as $not)
			<div class="column-1_4">
				<div class="sc_team_item sc_team_item_1 odd first">
					<div class="sc_team_item_avatar">
						<img class="wp-post-image" width="326" height="340" alt="" src='{{ asset("storage/{$not->foto} ") }}'>
						<div class="sc_team_item_hover">
							<div class="sc_team_item_socials">
								<div class="sc_socials sc_socials_size_small">
								<!-- 	<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_twitter" style="background-image: url(http://alliance.themerex.net/wp-content/themes/alliance/fw/images/socials/twitter.png);"></a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_gplus" style="background-image: url(http://alliance.themerex.net/wp-content/themes/alliance/fw/images/socials/gplus.png);"></a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_facebook" style="background-image: url(http://alliance.themerex.net/wp-content/themes/alliance/fw/images/socials/facebook.png);"></a>
									</div> -->

									<span style="color:red">Parabéns</span>
								</div>
							</div>
						</div>
					</div>
					<div class="sc_team_item_info">
						<div class="sc_team_item_email_button icon-mail-3"></div>
						<div class="sc_team_item_email">{{ $not->email }}</div>
						<h6 class="sc_team_item_title">
							<a href="">{{ $not->name }}</a></h6>
							<div class="sc_team_item_position">{{ date( 'd/m' , strtotime($not->nascimento)) }}</div>
						</div>
					</div>
				</div>
				@empty

				<div style="background:#fff; padding:10px; width:50%; border-radius:10px;">
					<p style="color:red;">Não existem aniversariantes nesse Mês!</p>

				</div>
				@endforelse

			</div>
		</div>

		@stop