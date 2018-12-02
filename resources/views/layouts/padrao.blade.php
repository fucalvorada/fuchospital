<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" /> -->

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<title> FUC Hospital de Alvorada</title>
	<style type="text/css" media="screen">#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar thead,body table.booked-calendar thead th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header{ background:red !important; }body #booked-profile-page input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .appt-block .google-cal-button > a:hover{ border-color:red!important; }body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-calendarSwitcher.calendar,body #booked-profile-page .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th{ background:#2a2f43 !important; }body table.booked-calendar tr.days th,body #booked-profile-page .booked-tabs{ border-color:#2a2f43 !important; }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt /* Multi-Slot Booking */{ background:#2a2f43; }body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{ border-color:#2a2f43; }body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt{ color:#2a2f43; }.booked-appt-list .timeslot.has-title .booked-public-appointment-title { color:inherit; }</style><meta http-equiv="X-UA-Compatible" content="IE=Edge" /><link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; Feed" href="http://alliance.themerex.net/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; Comments Feed" href="http://alliance.themerex.net/comments/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Alliance &raquo; 51 Comments Feed" href="http://alliance.themerex.net/feed/?attachment_id=497" />
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/alliance.themerex.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
		!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}

		.page_content_wrap{

			background: #b2221f;
		}

	</style>


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css">
	<link rel='stylesheet' id='timeline-css-css'  href='{{ asset("wp-content/plugins/content_timeline/css/frontend/timeline.css") }}' type='text/css' media='all' />

	<link rel='stylesheet' id='customScroll-css-css'  href='http://alliance.themerex.net/wp-content/plugins/content_timeline/css/frontend/jquery.mCustomScrollbar.css?ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='prettyPhoto-css-css'  href='http://alliance.themerex.net/wp-content/plugins/content_timeline/css/frontend/prettyPhoto.css?ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='my_timeline_font_awesome-css'  href='http://alliance.themerex.net/wp-content/plugins/content_timeline//css/frontend/awesome/font-awesome.css?ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='my_timeline_lineicons_css-css'  href='http://alliance.themerex.net/wp-content/plugins/content_timeline//css/frontend/themify-icons.css?ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='bbp-default-css'  href='http://alliance.themerex.net/wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.14-6684' type='text/css' media='screen' />
	<link rel='stylesheet' id='booked-icons-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/css/icons.css?ver=2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='booked-tooltipster-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/tooltipster/css/tooltipster.css?ver=3.3.0' type='text/css' media='all' />
	<link rel='stylesheet' id='booked-tooltipster-theme-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/tooltipster/css/themes/tooltipster-light.css?ver=3.3.0' type='text/css' media='all' />
	<link rel='stylesheet' id='booked-animations-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/css/animations.css?ver=2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='booked-styles-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/css/styles.css?ver=2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='booked-responsive-css'  href='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/css/responsive.css?ver=2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='bp-legacy-css-css'  href='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-templates/bp-legacy/css/buddypress.min.css?ver=3.1.0' type='text/css' media='screen' />
	<link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='http://alliance.themerex.net/wp-content/plugins/essential-grid/public/assets/css/settings.css?ver=2.2.4.2' type='text/css' media='all' />
	<link rel='stylesheet' id='tp-open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&#038;ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='tp-raleway-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=4.9.8' type='text/css' media='all' />
	<link rel='stylesheet' id='tp-droid-serif-css'  href='http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700&#038;ver=4.9.8' type='text/css' media='all' />

	<link rel='stylesheet' id='wpProQuiz_front_style-css'  href='http://alliance.themerex.net/wp-content/plugins/wp-pro-quiz/css/wpProQuiz_front.min.css?ver=0.37' type='text/css' media='all' />
	<link rel='stylesheet' id='weblator_polling-plugin-styles-css'  href='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/css/public.css?ver=1.4.0' type='text/css' media='all' />
	<link rel='stylesheet' id='weblator_polling-fa-css'  href='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/css/font-awesome.min.css?ver=1.4.0' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-font-Open-Sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-font-Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-font-Love-Ya-Like-A-Sister-css'  href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&#038;subset=latin' type='text/css' media='all' />

	<link rel='stylesheet' id='tp-fontello-css'  href="{{ asset('wp-content/plugins/essential-grid/public/assets/font/fontello/css/fontello.css') }}" type='text/css' media='all' />

	<link rel='stylesheet' id='themerex-fontello-style-css'  href="{{ asset('wp-content/themes/alliance/css/fontello/css/fontello.css') }}" type='text/css' media='all' />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


	<link rel='stylesheet' id='themerex-main-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='themerex-shortcodes-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/fw/shortcodes/shortcodes.css' type='text/css' media='all' />
	<link rel='stylesheet' id='themerex-animation-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/fw/css/core.animation.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bbpress-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/css/bbpress-style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='buddypress-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/css/buddypress-style.css' type='text/css' media='all' />

	<!-- <link rel='stylesheet' id='themerex-skin-style-css'  href='../wp-content/themes/alliance/skins/alliance/skin.css' type='text/css' media='all' /> -->

	<link rel='stylesheet' id='themerex-skin-style-css'  href="{{ asset('wp-content/themes/alliance/skins/alliance/skin.css') }}" type='text/css' media='all' />

	<link rel='stylesheet' id='themerex-skin-style-css'  href="{{ asset('wp-content/themes/alliance/skins/alliance/skin.css') }}" type='text/css' media='all' />





	<link rel='stylesheet' id='themerex-custom-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/fw/css/custom-style.min.css' type='text/css' media='all' />
	<style id='themerex-custom-style-inline-css' type='text/css'>

		.icon-7:before { content: '\e8ee'; }

		body,button,input,select,textarea{
			font-family:'Open Sans',sans-serif
		}
		body{
			font-size:14px;
			font-weight:400;
			line-height:24px;
			color:#7f828f
		}
		h1,.h1{
			font-family:'Open Sans',sans-serif;
			font-size:45px;
			font-weight:600;
			line-height:54px;
			color:#fff;
			text-align: center;
		}
		h1 a,.h1 a{
			color:#2a2f43
		}
		@media (max-width:600px){
			h1,.h1{
				font-size:34.65px !important;
				line-height:41.58px !important
			}
			.
		}
		h2,.h2{
			font-family:'Open Sans',sans-serif;
			font-size:36px;
			font-weight:600;
			line-height:43px;
			color:#2a2f43
		}
		h2 a,.h2 a{
			color:#2a2f43
		}
		@media (max-width:600px){
			h2,.h2{
				font-size:29.52px !important;
				line-height:35.26px !important
			}
			.
		}
		h3,.h3{
			font-family:'Open Sans',sans-serif;
			font-size:24px;
			font-weight:600;
			line-height:28px;
			color:#2a2f43
		}
		h3 a,.h3 a{
			color:#2a2f43
		}
		h4,.h4{
			font-family:'Open Sans',sans-serif;
			font-size:22px;
			font-weight:700;
			line-height:26px;
			color:#2a2f43
		}
		h4 a,.h4 a{
			color:#2a2f43
		}
		h5,.h5{
			font-family:'Open Sans',sans-serif;
			font-size:20px;
			font-weight:700;
			line-height:24px;
			color:#2a2f43
		}
		h5 a,.h5 a{
			color:#2a2f43
		}
		h6,.h6{
			font-family:'Open Sans',sans-serif;
			font-size:14px;
			font-weight:700;
			line-height:20px;
			color:#2a2f43
		}
		h6 a,.h6 a{
			color:#2a2f43
		}
		.sc_accordion.sc_accordion_style_1 .sc_accordion_item .sc_accordion_title:hover,
		.sc_tabs.sc_tabs_style_1 .sc_tabs_titles li a:hover,
		.sc_tooltip_parent,
		.page_top_wrap.page_top_title .breadcrumbs,
		.widget_area ul li:before,
		.widget_area ul li .count,
		.widget_area ul li.recentcomments span.comment-author-link a,
		.widget_area .widget_product_tag_cloud a:hover,
		.widget_area .widget_tag_cloud a:hover,
		.post_info.post_info_bottom .post_info_item,
		.widget_area ul li.recentcomments .comment-author-link,
		blockquote.sc_quote.sc_quote_style_2 .sc_quote_title,
		.sc_blogger.template_masonry .post_content.isotope_item_content .post_title a:hover,
		.sc_blogger.template_masonry .post_content.isotope_item_content .post_date,
		.sc_blogger.template_masonry .post_format_link .post_featured .content a:hover,
		.sc_blogger.template_classic .post_content.isotope_item_content .post_title a:hover,
		.sc_blogger.template_classic .post_content.isotope_item_content .post_date,
		.sc_blogger.template_classic .post_format_link .post_featured .content a:hover,
		.isotope_filters a.active,
		.isotope_filters a:hover,
		.menu_main_wrap .menu_main_nav li>a:hover,
		.menu_main_wrap .menu_main_nav li>a:hover:after,
		.sc_blogger.layout_news .post_date,
		.widget_area ul li a:hover,
		.widget_area .post_title a:hover,
		.sc_table.recent_jobs td a:hover,
		.sc_list.sc_list_style_ul li:before,
		li.bbp-topic-title a:hover,
		.widget_area .widget_display_replies ul li a,
		.widget_area .widget_display_replies a.bbp-reply-topic-title:hover,
		.search_wrap.search_style_regular .search_icon,
		.menu_user_wrap .menu_user_nav li li>a:hover,
		.popup_wrap .popup_close:hover,
		.pagination_wrap .pager_next,
		.pagination_wrap .pager_prev,
		.pagination_wrap .pager_last,
		.pagination_wrap .pager_first,
		.pagination_single>.pager_numbers,
		.pagination_slider .pager_cur:hover,
		.pagination_slider .pager_cur:focus,
		.pagination_pages>.active,
		.pagination_pages>a.pager_dot,
		.pagination_wrap .pager_next:hover,
		.pagination_wrap .pager_prev:hover,
		.pagination_wrap .pager_last:hover,
		.pagination_wrap .pager_first:hover,
		.menu_main_wrap .menu_main_nav>li.open>a,
		.menu_main_wrap .menu_main_nav>li.open>a:after,
		#buddypress div.item-list-tabs ul li a:hover,
		#booking_month_nav_prev .booking_month_nav_button:hover:before,
		#booking_month_nav_next .booking_month_nav_button:hover:before,
		#booking_slot_form div.booking_float_left.booking_height_20.booking_line_20 a:hover,
		#booking_slot_form div.booking_font_custom.booking_float_right.text_right:hover,
		.close_booking:hover,
		.widget_area .widget_text a,
		.widget_area .post_info a,
		a:hover,
		.copyright_wrap a,
		.widget_area .widget_calendar td a.day_wrap,
		.page_top_wrap .breadcrumbs a.breadcrumbs_item,
		a,
		.comments_list_wrap .comment_info>.comment_date>.comment_date_value,
		.comments_list_wrap .comment_info>.comment_time,
		.isotope_item_courses .post_featured .post_title a:hover {
			color: #b2221f
		}
		.menu_user_wrap .menu_user_nav li li>a:hover{
			color:#b2221f !important
		}

		.menu_user_wrap .logo{
			height: 101px !important;
		}

		.top_panel_wrap{
			height: 100px !important;
		}

		.menu_main_wrap .menu_main_nav > li:before {
			color: #fff;
			font-size: 25px;
			font-weight: 100;
			vertical-align: initial;
			margin-right: 0;
			float: left;
			-webkit-transition: all ease .3s;
			-moz-transition: all ease .3s;
			-ms-transition: all ease .3s;
			-o-transition: all ease .3s;
			transition: all ease .3s;
		}
		.sc_accordion .sc_accordion_item .sc_accordion_title.ui-state-active,.sc_table table thead tr,.sc_audio_player.sc_audio_image .mejs-button.mejs-playpause-button.mejs-play button:hover,.sc_audio_player.sc_audio_info .mejs-button.mejs-playpause-button.mejs-play button,.sc_video_frame.hover_icon:before,.sc_slider_controls_wrap a,input[type="submit"],input[type="button"],button,.sc_button,.sc_dropcaps.sc_dropcaps_style_1 .sc_dropcaps_item,blockquote:after,blockquote.sc_quote,.sc_infobox.sc_infobox_style_info,.widget_area .widget_product_tag_cloud a,.widget_area .widget_tag_cloud a,.widget_area .widget_product_search .search_button,.widget_area .widget_search .search_button,.post_item.post_item_excerpt.post_format_link,.sc_tabs.sc_tabs_style_2 .sc_tabs_titles li.ui-state-active a,.reviews_stars.reviews_style_heart,.reviews_block .reviews_max_level_100 .reviews_stars_hover,.reviews_block .reviews_item.reviews_slider,.sc_team_style_2 .sc_team_item_email_button:before,.sc_blogger.template_masonry .post_format_quote .content,.sc_blogger.template_classic .post_format_quote .content,.sc_blogger.template_portfolio .isotope_item_courses .post_category,.isotope_filters a,.sc_skills_counter .sc_skills_item.sc_skills_style_2 .sc_skills_count,.weblator-poll-container .btn-default,.pagination_single a,.pagination_slider .pager_cur,.pagination_pages>a,.pagination_pages>span,.scroll_to_top,.reviews_block .reviews_summary .reviews_item:before,.sticky .sticky_label,.menu_main_wrap .menu_main_nav>li>ul,.sc_tabs.sc_tabs_style_1 .sc_tabs_titles li.ui-state-active a,#bbpress-forums div.bbp-topic-content a,#buddypress button,#buddypress a.button,#buddypress input[type="submit"],#buddypress input[type="button"],#buddypress input[type="reset"],#buddypress ul.button-nav li a,#buddypress div.generic-button a,#buddypress .comment-reply-link,a.bp-title-button,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a,#buddypress div.item-list-tabs ul li.selected a{
			background-color:#222636
		}
		.menu_main_wrap .menu_main_nav_area ul::-webkit-scrollbar-thumb{
			background-color:#b2221f
		}
		.sc_audio_player.sc_audio_image .mejs-controls .mejs-pause.mejs-button button:hover,.sc_audio_player.sc_audio_image .mejs-controls .mejs-unmute button:hover,.sc_audio_player.sc_audio_info .mejs-controls .mejs-time-rail .mejs-time-current,.sc_audio_player.sc_audio_info .mejs-controls .mejs-pause button,.sc_audio_player.sc_audio_info .mejs-controls .mejs-mute button,.sc_audio_player.sc_audio_info .mejs-controls .mejs-unmute button,.sc_blogger.template_masonry .post_format_audio .sc_audio .mejs-controls .mejs-time-rail .mejs-time-current,.sc_blogger.template_classic .post_format_audio .sc_audio .mejs-controls .mejs-time-rail .mejs-time-current,.sc_audio_player.sc_audio_info .mejs-controls .mejs-mute button,.sc_tooltip_parent .sc_tooltip,.sc_tooltip_parent .sc_tooltip:before,.menu_main_wrap .menu_main_nav>li>ul>li>ul{
			background:#b2221f !important
		}
		.sc_tooltip_parent,.widget_area .widget_product_tag_cloud a,.widget_area .widget_tag_cloud a,.isotope_filters a,.widget_area .sc_tabs.sc_tabs_style_2 .sc_tabs_content{
			border-color:#b2221f
		}
		.sc_accordion .sc_accordion_item .sc_accordion_title.ui-state-active:after{
			border-color:#b2221f transparent transparent transparent
		}
		.sc_tabs.sc_tabs_style_1 .sc_tabs_titles li.ui-state-active a:before{
			border-color:transparent transparent transparent #b2221f
		}
		button,div.bbp-submit-wrapper button,input[type="submit"],#buddypress a.disabled,#buddypress button.disabled,#buddypress button.pending,#buddypress div.pending a,#buddypress input[type=submit].disabled,#buddypress input[type=submit].pending,#buddypress input[type=submit][disabled=disabled],#buddypress input[type=button].disabled,#buddypress input[type=button].pending,#buddypress input[type=reset].disabled,#buddypress input[type=reset].pending{
			box-shadow:0 3px rgb(73,181,194)
		}
		.main_font_1{
			color:#b2221f
		}
		.main_background_1{
			background-color:#b2221f
		}
		.sc_slider_swiper .sc_slider_info .sc_slider_reviews .reviews_stars.reviews_style_heart:before,del,.sc_highlight_style_3,.page_top_wrap .page_title,.page_top_wrap .breadcrumbs a.breadcrumbs_item:hover,.comments_list_wrap .comment_reply a{
			color:#f5393d
		}

		.page_content_wrap{
			height: 100% !important
		}

		@media (max-width: 768px){
			.sidebar aside.widget {
				width: calc(47% - 54px) !important;
			}
		}
		.sc_audio_player.sc_audio_image .mejs-button.mejs-playpause-button.mejs-play button,.sc_audio_player.sc_audio_info .mejs-button.mejs-playpause-button.mejs-play button:hover,.sc_slider_controls_wrap a:hover,.sc_highlight_style_2,.sc_dropcaps.sc_dropcaps_style_2 .sc_dropcaps_item,.sc_infobox.sc_infobox_style_error,.page_top_wrap .page_title .page_icon{
			background-color:#f5393d
		}
		.main_color_2{
			background:#f5393d
		}
		.sc_audio_player.sc_audio_image .mejs-controls .mejs-time-rail .mejs-time-current,.sc_audio_player.sc_audio_image .mejs-controls .mejs-pause button,.sc_audio_player.sc_audio_image .mejs-controls .mejs-mute button,.sc_audio_player.sc_audio_image .mejs-controls .mejs-unmute button,.sc_audio_player.sc_audio_info .mejs-controls .mejs-pause.mejs-button button:hover,.sc_audio_player.sc_audio_image .mejs-controls .mejs-mute button,.sc_audio_player.sc_audio_info .mejs-controls .mejs-unmute button:hover{
			background:#f5393d !important
		}
		.main_color_2{
			border-color:#f5393d
		}
		.flip-clock-divider.hours + ul.flip .inn,.flip-clock-divider.hours + ul.flip + ul.flip .inn,.flip-clock-divider.minutes + ul.flip .inn,.flip-clock-divider.minutes + ul.flip + ul.flip .inn,.flip-clock-divider.seconds + ul.flip .inn,.flip-clock-divider.seconds + ul.flip + ul.flip .inn{
			color:#f5393d !important
		}
		.main_font_2{
			color:#f5393d
		}
		.main_background_2{
			background-color:#f5393d
		}
		.sc_audio_player.sc_audio_image .mejs-button.mejs-playpause-button.mejs-play button:hover,.sc_audio_player .mejs-button.mejs-playpause-button.mejs-play button:hover,.sc_audio_player.sc_audio_info .mejs-controls .mejs-mute button:hover,.sc_audio_player.sc_audio_image .mejs-controls .mejs-mute button:hover,.weblator-poll-container .btn:hover,.weblator-poll-container .panel-footer .weblator-view-results a:hover{
			box-shadow:none !important;
			background-color:#8cc80c !important
		}
		.sc_blogger.layout_date.sc_blogger_horizontal .post_content:hover,.sc_blogger.template_classic .post_content.isotope_item_content .post_category:hover,.sc_blogger.template_classic .post_format_video .hover_icon.sc_video_play_button:hover:before,.sc_blogger.template_portfolio .isotope_item_courses .post_category:hover,.menu_user_nav>li>a:hover,.search_wrap .search_icon:hover,input[type="submit"]:hover,input[type="button"]:hover,button:hover,.sc_button:hover,.menu_user_wrap .menu_user_right .menu_button:hover,span.fc-button.fc-button-prev.ui-state-default.ui-corner-left.ui-corner-right:hover,span.fc-button.fc-button-next.ui-state-default.ui-corner-left.ui-corner-right:hover,.flatButton .item .read_more:hover,.wpProQuiz_button:hover,.weblator-poll-container .btn:hover,.weblator-poll-container .panel-footer .weblator-view-results a:hover{
			background-color:#8cc80c !important
		}
		.menu_user_nav>li>a:hover,.search_wrap .search_icon:hover,input[type="submit"]:hover,input[type="button"]:hover,button:hover,.sc_button:hover,.menu_user_wrap .menu_user_right .menu_button:hover,span.fc-button.fc-button-prev.ui-state-default.ui-corner-left.ui-corner-right:hover,span.fc-button.fc-button-next.ui-state-default.ui-corner-left.ui-corner-right:hover,.flatButton .item .read_more:hover ,.wpProQuiz_button:hover{
			box-shadow:0 3px #6E9E08 !important;
			color:#fff !important
		}
		.top_panel_over .top_panel_wrap,.menu_main_wrap,.current_day{
			background-color:#2a2f43
		}
		@-moz-document url-prefix(){
			.menu_main_wrap .menu_main_nav_area ul:after{
				background-color:#2a2f43
			}
		}
		.copyright_wrap,body{
			background-color:#222636
		}
		.menu_main_wrap{
			border-color:#222636;
			margin-top: 30px;
		}
		.menu_main_wrap .menu_main_nav>li ul::-webkit-scrollbar-thumb{
			background-color:#222636
		}

		.logout{
			font-family: Lato, sans-serif;
			font-size: 12px;
			text-transform: uppercase;
			font-weight: 900;
			padding: 5px 15px;
			background: #fff;
			border-radius: 5px;
			position: relative;
			display: block;
			top: 0;
			box-shadow: 0px 3px 0px #ededed;
		}

	</style>


	<link rel='stylesheet' id='themerex-responsive-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' id='mediaelement-css'  href='http://alliance.themerex.net/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css'  href='http://alliance.themerex.net/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.9.8' type='text/css' media='all' />
	<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/jquery.easing.1.3.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/jquery.timeline.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/jquery.mousewheel.min.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/jquery.mCustomScrollbar.min.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/rollover.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline/js/frontend/jquery.prettyPhoto.js?ver=4.9.8'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/content_timeline//js/frontend/jquery.my_add_function.js?ver=4.9.8'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var BP_Confirm = {"are_you_sure":"Are you sure?"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-core/js/confirm.min.js?ver=3.1.0'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-core/js/widget-members.min.js?ver=3.1.0'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-core/js/jquery-query.min.js?ver=3.1.0'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.min.js?ver=3.1.0'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.min.js?ver=3.1.0'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Favorite","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Remove Favorite","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all comments (%d)","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.min.js?ver=3.1.0'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/js/vendors/excanvas.js?ver=1.4.0'></script>
	<script type='text/javascript'>
		var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
	</script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.6-78496d1'></script>
	<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=4.9.8'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
		/* ]]> */
	</script>
	<link rel='https://api.w.org/' href='http://alliance.themerex.net/wp-json/' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://alliance.themerex.net/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://alliance.themerex.net/wp-includes/wlwmanifest.xml" /> 
	<meta name="generator" content="WordPress 4.9.8" />
	<link rel='shortlink' href='http://alliance.themerex.net/?p=497' />
	<link rel="alternate" type="application/json+oembed" href="http://alliance.themerex.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Falliance.themerex.net%2F51%2F" />
	<link rel="alternate" type="text/xml+oembed" href="http://alliance.themerex.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Falliance.themerex.net%2F51%2F&#038;format=xml" />

	<script type="text/javascript">var ajaxurl = 'http://alliance.themerex.net/wp-admin/admin-ajax.php';</script>

	<script type="text/javascript">
		my_timeline_front_ajax_nonce="12ded89d0e";
		my_timeline_front_ajax_url="http://alliance.themerex.net/wp-admin/admin-ajax.php";
	</script>
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"><link rel="stylesheet" href="http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/css/notie.css">		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://alliance.themerex.net/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>


	<body class="bp-legacy attachment attachment-template-default single single-attachment postid-497 attachmentid-497 attachment-jpeg themerex_body body_style_wide body_filled theme_skin_alliance article_style_stretch layout_single-standard template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_show top_panel_over menu_ user_menu_show sidebar_show sidebar_right responsive_menu wpb-js-composer js-comp-ver-5.5.2 vc_responsive no-js">


		<div class="body_wrap">


			<div class="page_wrap "  style="background-color: #f4f7f9;">


				<header class="top_panel_wrap">

					<div class="menu_user_wrap">
						<div class="logo" style="background-color:  #f4f7f9;">
							<a href="{{ route('home') }}">
								<!-- <img src="http://www.hospitaldealvorada.com.br/images/layout/logo.png" alt="Hospital de Alvorada" class="logo_main" > -->
								<!-- <img src='{{ asset("storage/logos/logo2.jpeg") }}' alt="Hospital de Alvorada" class="logo_main" > -->

								<img src='{{ asset("storage/logos/logo4.png") }}' alt="Hospital de Alvorada" class="logo_main" >
							</a>
						</div>
						<div class="menu_user_area menu_user_right menu_user_nav_area m_top">  
							<ul id="menu_user" class="menu_user_nav">

								<!-- <li class="menu_user_register">
									<a href="#popup_registration" class="popup_link popup_register_link">Register</a>
									<div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
										<a href="#" class="popup_close"></a>
										<div class="form_wrap">
											<form name="registration_form" method="post" class="popup_form registration_form">
												<input type="hidden" name="redirect_to" value="http://alliance.themerex.net"/>
												<div class="form_left">
													<div class="popup_form_field login_field iconed_field"><input type="text" id="registration_username" name="registration_username"  value="" placeholder="User name (login)"></div>
													<div class="popup_form_field email_field iconed_field"><input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail"></div>
													<div class="popup_form_field agree_field">
														<input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
														<label for="registration_agree">I agree with</label> <a href="#">Terms &amp; Conditions</a>
													</div>
													<div class="popup_form_field submit_field"><input type="submit" class="submit_button" value="Sign Up"></div>
												</div>
												<div class="form_right">
													<div class="popup_form_field password_field iconed_field"><input type="password" id="registration_pwd"  name="registration_pwd"  value="" placeholder="Password"></div>
													<div class="popup_form_field password_field iconed_field"><input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password"></div>
													<div class="popup_form_field description_field">Minimum 6 characters</div>
												</div>
											</form>
											<div class="result message_block"></div>
										</div>
										</div>		
									</li> -->
								<!-- <li class="menu_user_login">
									<a href="#popup_login" class="popup_link popup_login_link">Login</a><div id="popup_login" class="popup_wrap popup_login bg_tint_light popup_half">
									<a href="#" class="popup_close"></a>
									<div class="form_wrap">
										<div>
											<form action="http://alliance.themerex.net/wp-login.php" method="post" name="login_form" class="popup_form login_form">
												<input type="hidden" name="redirect_to" value="http://alliance.themerex.net">
												<div class="popup_form_field login_field iconed_field icon-user-2"><input type="text" id="log" name="log" value="" placeholder="Login or Email"></div>
												<div class="popup_form_field password_field iconed_field icon-lock-1"><input type="password" id="password" name="pwd" value="" placeholder="Password"></div>
												<div class="popup_form_field remember_field">
													<a href="http://alliance.themerex.net/wp-login.php?action=lostpassword&redirect_to=http%3A%2F%2Falliance.themerex.net%2F51%2F" class="forgot_password">Forgot password?</a>
													<input type="checkbox" value="forever" id="rememberme" name="rememberme">
													<label for="rememberme">Remember me</label>
												</div>
												<div class="trx_addons_popup_form_field trx_addons_popup_form_field_agree">
													<input type="checkbox" value="1" id="i_agree_privacy_policy_registration" name="i_agree_privacy_policy"><label for="i_agree_privacy_policy_registration"> I agree that my submitted data is being collected and stored.</label>
												</div>				<div class="popup_form_field submit_field"><input type="submit" class="submit_button" value="Login" disabled="disabled"></div>
												<div class="result message_block"></div>
											</form>
										</div>
									</div>	
								</div>
							</li>-->

							<li>
								<a href="{{ route('perfil') }}" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
							</li>
							<li class="nav-item dropdown">

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="logout" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Sair') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>

					</ul>
			<!-- 		<div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
						<a href="#" class="search_icon "></a>
						<div class="search_form_wrap">
							<form role="search" method="get" class="search_form" action="http://alliance.themerex.net/">
								<button type="submit" class="search_submit " title="Start search"></button>
								<input type="text" class="search_field" placeholder="Pesquisar ..." value="" name="s" title="Pesquisar ..." />
							</form>
						</div>
						<div class="search_results widget_area bg_tint_light"><a class="search_results_close ncel"></a><div class="search_results_content"></div></div>
					</div> -->
					<div class="menu_button show_menu">Mostrar Menu</div>
				</div>
			</div> 
		</header>


		<aside class="menu_main_wrap">
			<nav role="navigation" class="menu_main_nav_area">
				<ul id="menu_main" class="menu_main_nav">
					<li id="menu-item-282" class="icon-11 menu-item menu-item-type-taxonomy menu-item-object-category menu-item-282">
						<a href="{{ route('home') }}">Home</a>

						<li id="menu-item-804" class="icon-16 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-804"><a>Notícias</a>
							<ul class="sub-menu">
								<li id="menu-item-857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-857">
									<a href="/noticias/lista">Todas Notícias</a>
								</li>
								@can('create_notice')

								<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990">
									<a href="/painel/noticias">Painel</a>
								</li>

								@endcan
							</ul>
						</li>
						<li id="menu-item-1951" class="icon-9 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1951"><a>Avisos</a>
							<ul class="sub-menu">
								<li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="{{ route('lista_aviso') }}">Ver Avisos</a></li>

								@can('create_aviso')
								<li id="menu-item-1953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1953">
								<a href="{{ route('aviso') }}">Painel</a>
								</li>
								@endcan
							</ul>
						</li>
						<li id="menu-item-805" class="icon-13 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-805"><a>Documentos</a>
							<ul class="sub-menu">
								<li id="menu-item-618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-618"><a href="{{ route('arquivos_view') }}">Ver Arquivos</a></li>

								@can('create_doc')
								<li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442">
								<a href="{{ route('painel_arquivos') }}">Painel</a>
								</li>
								@endcan
							</ul>
						</li>

						<li id="menu-item-282" class="icon-20 menu-item menu-item-type-taxonomy menu-item-object-category menu-item-282">
							<a href="{{ route('aniver') }}">Aniversariantes</a>
						</li>


						<li id="menu-item-806" class="icon-15 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-806">
							<a>Eventos</a>
							<ul class="sub-menu">
								<li id="menu-item-590" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590">
									<a href="{{ route('lista_evento') }}">Ver Eventos</a>
								</li>

								@can('create_eventos')
								<li id="menu-item-730" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-730">
									<a href="{{ route('evento') }}">Painel</a>
								</li>
								@endcan

							</ul>
						</li>

						<li id="menu-item-806" class="icon-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-806">
							<a>Cardápio</a>
							<ul class="sub-menu">
								<li id="menu-item-590" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590">
									<a href="{{ route('lista_cardapio')}}">Ver Cardápio</a>
								</li>

								@can('create_cardapio')
								<li id="menu-item-730" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-730">
									<a href="{{ route('cardapio') }}">Painel</a>
								</li>
								@endcan
							</ul>
						</li>

						@can('create_suporte')
						<li id="menu-item-1093" class="icon-8 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1093"><a>Suporte TI</a>
							<ul class="sub-menu">
								<li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">
									<a href="{{ route('chamado_view')}}">Abrir Chamado</a>
								</li>

								@can('gen_chamado')
								<li id="menu-item-1113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1113">
									<a href="{{ route('chamado_lista')}}">Painel</a>
								</li>
								@endcan
								
							</ul>
						</li>
						@endcan

						<li id="menu-item-1093" class="icon-10 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1093">
							<a href="http://labac.cardiologia.org.br/hlisweb/inicio.asp" target="_blank"> Exames</a>
						</li>

					</ul>
				</li>
			</ul>
		</nav>
	</aside>

	<div class="page_content_wrap"  >


		<div class="content_wrap">
			<div class="content">		

				@yield('content')

				<section class="related_wrap related_wrap_empty"></section>

			</div>



			<div class="sidebar widget_area bg_tint_light sidebar_style_light" style="background: #b2221f;" role="complementary"> 

				<div class="grid-sizer"></div><div class="gutter-sizer"></div>

			<!-- <aside id="themerex_widget_calendar-2" class="widget_number_6 widget widget_calendar">

				<h5 class="widget_title"></h5>
				<table id="wp-calendar-591983960" class="wp-calendar">
					<thead>
						<tr>
							<th class="month_prev">
								<a href="#" data-type="post" data-year="2015" data-month="07" title="View posts for July 2015"></a></th>
								<th class="month_cur" colspan="5">October </th>
								<th class="month_next">&nbsp;</th>
							</tr><tr>
							<th class="weekday" scope="col" title="Monday">M</th><th class="weekday" scope="col" title="Tuesday">T</th><th class="weekday" scope="col" title="Wednesday">W</th><th class="weekday" scope="col" title="Thursday">T</th><th class="weekday" scope="col" title="Friday">F</th><th class="weekday" scope="col" title="Saturday">S</th><th class="weekday" scope="col" title="Sunday">S</th></tr></thead><tbody><tr><td class="day"><span class="day_wrap">1</span></td><td class="day"><span class="day_wrap">2</span></td><td class="day"><span class="day_wrap">3</span></td><td class="day"><span class="day_wrap">4</span></td><td class="day"><span class="day_wrap">5</span></td><td class="day"><span class="day_wrap">6</span></td><td class="day"><span class="day_wrap">7</span></td></tr><tr><td class="day"><span class="day_wrap">8</span></td><td class="day"><span class="day_wrap">9</span></td><td class="day"><span class="day_wrap">10</span></td><td class="day"><span class="day_wrap">11</span></td><td class="day"><span class="day_wrap">12</span></td><td class="day"><span class="day_wrap">13</span></td><td class="day"><span class="day_wrap">14</span></td></tr><tr><td class="day"><span class="day_wrap">15</span></td><td class="day"><span class="day_wrap">16</span></td><td class="today"><span class="day_wrap">17</span></td><td class="day"><span class="day_wrap">18</span></td><td class="day"><span class="day_wrap">19</span></td><td class="day"><span class="day_wrap">20</span></td><td class="day"><span class="day_wrap">21</span></td></tr><tr><td class="day"><span class="day_wrap">22</span></td><td class="day"><span class="day_wrap">23</span></td><td class="day"><span class="day_wrap">24</span></td><td class="day"><span class="day_wrap">25</span></td><td class="day"><span class="day_wrap">26</span></td><td class="day"><span class="day_wrap">27</span></td><td class="day"><span class="day_wrap">28</span></td></tr><tr><td class="day"><span class="day_wrap">29</span></td><td class="day"><span class="day_wrap">30</span></td><td class="day"><span class="day_wrap">31</span></td><td class="pad" colspan="4"><span class="day_wrap">&nbsp;</span></td></tr></tbody></table>
						</aside> -->



		<!-- 						<aside id="themerex_widget_recent_posts-6" class="widget_number_2 widget widget_recent_posts"><h5 class="widget_title">Latest Groups News</h5><article class="post_item with_thumb first"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Id est laborum et dolorum fuga" src="http://alliance.themerex.net/wp-content/uploads/2015/05/52-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/id-est-laborum-et-dolorum-fuga/">Id est laborum et dolorum fuga</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/id-est-laborum-et-dolorum-fuga/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Inventore veritatis et quasi" src="http://alliance.themerex.net/wp-content/uploads/2015/05/60-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/inventore-veritatis-et-quasi/">Inventore veritatis et quasi</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/inventore-veritatis-et-quasi/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Ed quia non numquam eius" src="http://alliance.themerex.net/wp-content/uploads/2015/05/59-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/ed-quia-non-numquam-eius/">Ed quia non numquam eius</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/ed-quia-non-numquam-eius/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Consectetur adipiscing elit" src="http://alliance.themerex.net/wp-content/uploads/2015/05/53-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/consectetur-adipiscing-elit/">Consectetur adipiscing elit</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/consectetur-adipiscing-elit/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Masonry Gallery" src="http://alliance.themerex.net/wp-content/uploads/2015/05/52-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/masonry-gallery-1/">Masonry Gallery</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/masonry-gallery-1/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article>
	</aside> -->



	<aside id="archives-3" class="widget_number_5 widget widget_archive"><h5 class="widget_title">Aniversariantes</h5>		
		<ul>
			<li><a href="{{ route('aniver_mes', 1) }}">Janeiro</a></li>
			<li><a href="{{ route('aniver_mes', 2) }}">Fevereiro</a></li>
			<li><a href="{{ route('aniver_mes', 3) }}">Março</a></li>
			<li><a href="{{ route('aniver_mes', 4) }}">Abril</a></li>
			<li><a href="{{ route('aniver_mes', 5) }}">Maio</a></li>
			<li><a href="{{ route('aniver_mes', 6) }}">Junho</a></li>
			<li><a href="{{ route('aniver_mes', 7) }}">Julho</a></li>
			<li><a href="{{ route('aniver_mes', 8) }}">Agosto</a></li>
			<li><a href="{{ route('aniver_mes', 9) }}">Setembro</a></li>
			<li><a href="{{ route('aniver_mes', 10) }}">Outubro</a></li>
			<li><a href="{{ route('aniver_mes', 11) }}">Novembro</a></li>
			<li><a href="{{ route('aniver_mes', 12) }}">Dezembro</a></li>

		</ul>
	</aside>

</div> <!-- /.sidebar -->

</div> <!-- </div> class="content_wrap"> -->			
</div>		<!-- </.page_content_wrap> -->


<div class="copyright_wrap">
	<div class="content_wrap">
		<p>© FUC ALVORADA 2018 Todo direitos reservados. 
		</div>
	</div>
	<a href="#" class="scroll_to_top icon-angle-up-1" title="Scroll to top"></a>
</div>	
</div>		


<div class="custom_html_section">
</div>

<div class="window" id="janela1" style="display: none;">
	@yield('modal')
</div>

<div class="window2" id="janela2" style="display: none;">
	@yield('modalEdit')
</div>

<div class="window3" id="janela3" style="display: none;">
	@yield('modalConfirma')
</div>
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>


<script type="text/javascript">
	jQuery(document).ready(function() {

		THEMEREX_GLOBALS["strings"] = {
			bookmark_add: "Add the bookmark",
			bookmark_added:		"Current page has en successfully added to the bookmarks. You can see it in the right panel on the tab \'Bookmarks\'",
			bookmark_del: "Delete this bookmark",
			bookmark_title:		"Enter bookmark title",
			bookmark_exists:		"Current page already exists in the bookmarks list",
			search_error:		"Error occurs in AJAX search! Please type your query and press search icon for the traditional search way.",
			email_confirm:		"On the e-mail address <b>%s</b> we sent a confirmation email.<br>Please, open it and click on the link.",
			reviews_vote:		"Thanks for your vote! New average rating is:",
			reviews_error:		"Error saving your vote! Please try again later.",
			error_like:			"Error saving your like! Please try again later.",
			error_global:		"Global error text",
			name_empty:			"The name can\'t be empty",
			name_long:			"Too long name",
			email_empty:			"Too short (or empty) email address",
			email_long:			"Too long email address",
			email_not_valid:		"Invalid email address",
			subject_empty:		"The subject can\'t be empty",
			subject_long:		"Too long subject",
			text_empty:			"The message text can\'t be empty",
			text_long:			"Too long message text",
			send_complete:		"Send message complete!",
			send_error:			"Transmit failed!",
			login_empty:			"The Login field can\'t be empty",
			login_long:			"Too long login field",
			login_success:		"Login success! The page will be reloaded in 3 sec.",
			login_failed:		"Login failed!",
			password_empty:		"The password can\'t be empty and shorter then 4 characters",
			password_long:		"Too long password",
			password_not_equal:	"The passwords in both fields are not equal",
			registration_success:"Registration success! Please log in!",
			registration_failed:	"Registration failed!",
			geocode_error:		"Geocode was not successful for the following reason:",
			googlemap_not_avail:	"Google map API not available!",
			editor_save_success:	"Post content saved!",
			editor_save_error:	"Error saving post data!",
			editor_delete_post:	"You really want to delete the current post?",
			editor_delete_post_header:"Delete post",
			editor_delete_success:	"Post deleted!",
			editor_delete_error:		"Error deleting post!",
			editor_caption_cancel:	"Cancel",
			editor_caption_close:	"Close"
		};
	});

</script>
<script type="text/javascript">jQuery(document).ready(function() {

	THEMEREX_GLOBALS['ajax_url'] = 'http://alliance.themerex.net/wp-admin/admin-ajax.php';
	THEMEREX_GLOBALS['ajax_nonce']		= '614dc84bf0';
	THEMEREX_GLOBALS['ajax_nonce_editor'] = '0f13e17c13';
	THEMEREX_GLOBALS['ajax_login']		= false;
	THEMEREX_GLOBALS['site_url']= 'http://alliance.themerex.net';
	THEMEREX_GLOBALS['vc_edit_mode']		= false;
	THEMEREX_GLOBALS['theme_font']		= 'Open Sans';
	THEMEREX_GLOBALS['theme_skin']		= 'alliance';
	THEMEREX_GLOBALS['theme_skin_bg']	= '';
	THEMEREX_GLOBALS['slider_height']	= 100;
	THEMEREX_GLOBALS['system_message']	= {message: '',status: '',header: ''};

	THEMEREX_GLOBALS['user_logged_in']	= false;THEMEREX_GLOBALS['toc_menu']		= 'float';
	THEMEREX_GLOBALS['toc_menu_home']	= false;THEMEREX_GLOBALS['toc_menu_top']	= false;
	THEMEREX_GLOBALS['menu_fixed']		= false;THEMEREX_GLOBALS['menu_relayout']	= 0;
	THEMEREX_GLOBALS['menu_responsive']	= 0;
	THEMEREX_GLOBALS['menu_slider']     = false;
	THEMEREX_GLOBALS['demo_time']		= 0;
	THEMEREX_GLOBALS['media_elements_enabled'] = true;
	THEMEREX_GLOBALS['ajax_search_enabled'] 	= true;
	THEMEREX_GLOBALS['ajax_search_min_length']	= 3;
	THEMEREX_GLOBALS['ajax_search_delay']		= 200;
	THEMEREX_GLOBALS['css_animation']      = true;
	THEMEREX_GLOBALS['menu_animation_in']  = '';
	THEMEREX_GLOBALS['menu_animation_out'] = '';
	THEMEREX_GLOBALS['popup_engine']	= 'magnific';
	THEMEREX_GLOBALS['popup_gallery']	= true;
	THEMEREX_GLOBALS['email_mask']	= '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';
	THEMEREX_GLOBALS['contacts_maxlength']	= 1000;
	THEMEREX_GLOBALS['comments_maxlength']	= 1000;
	THEMEREX_GLOBALS['remember_visitors_settings']	= false;
	THEMEREX_GLOBALS['admin_mode']			= false;
	THEMEREX_GLOBALS['isotope_resize_delta']	= 0.3;
	THEMEREX_GLOBALS['error_message_box']	= null;
	THEMEREX_GLOBALS['viewmore_busy']		= false;
	THEMEREX_GLOBALS['video_resize_inited']	= false;
	THEMEREX_GLOBALS['top_panel_height']	= 0;
});
</script>

<script type="text/javascript">jQuery(document).ready(function() {
	if (THEMEREX_GLOBALS['theme_font']=='') THEMEREX_GLOBALS['theme_font'] = 'Roboto';

	THEMEREX_GLOBALS['link_color'] = '';
	THEMEREX_GLOBALS['menu_color'] = '';
	THEMEREX_GLOBALS['user_color'] = '';
});
</script>

<link rel='stylesheet' id='themerex-messages-style-css'  href='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/core.messages/core.messages.css' type='text/css' media='all' />
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
	jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/spin.min.js?ver=2.0.1'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/spin.jquery.js?ver=2.0.1'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/tooltipster/js/jquery.tooltipster.min.js?ver=3.3.0'></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var booked_js_vars = {"ajax_url":"http:\/\/alliance.themerex.net\/wp-admin\/admin-ajax.php","profilePage":"","publicAppointments":"","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_please_wait":"Please wait ...","i18n_wrong_username_pass":"Wrong username\/password combination.","i18n_fill_out_required_fields":"Please fill out all required fields.","i18n_guest_appt_required_fields":"Please enter your name to book an appointment.","i18n_appt_required_fields":"Please enter your name, your email address and choose a password to book an appointment.","i18n_appt_required_fields_guest":"Please fill in all \"Information\" fields.","i18n_password_reset":"Please check your email for instructions on resetting your password.","i18n_password_reset_error":"That username or email is not recognized."};
	/* ]]> */
</script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/booked-appointments/assets/js/functions.js?ver=2.1'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.14-6684'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/js/vendors/chartjs_new.js?ver=1.4.0'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/js/app/legend.js?ver=1.4.0'></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var ajaxurl = "http:\/\/alliance.themerex.net\/wp-admin\/admin-ajax.php";
	/* ]]> */
</script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/js/app/poll.js?ver=1.4.0'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/plugins/responsive-poll/public/assets/js/app/poll-init.js?ver=1.4.0'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/responsive.init.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/core.reviews.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/core.utils.js'></script>
<script type='text/javascript' src="{{ asset('wp-content/themes/alliance/fw/js/core.init.js') }}"></script>


<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/social/social-share.min.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/core.messages/core.messages.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/shortcodes/shortcodes.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/grid/grid.js'></script>
<script type='text/javascript' src='http://alliance.themerex.net/wp-content/themes/alliance/fw/js/jquery.flatshadow.js'></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>

</body>
</html>