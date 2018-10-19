@extends('layouts.padrao')

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>51 &#8211; Alliance</title>
    <style type="text/css" media="screen">#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar thead,body table.booked-calendar thead th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header{ background:red !important; }body #booked-profile-page input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .appt-block .google-cal-button > a:hover{ border-color:red!important; }body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-calendarSwitcher.calendar,body #booked-profile-page .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th{ background:#2a2f43 !important; }body table.booked-calendar tr.days th,body #booked-profile-page .booked-tabs{ border-color:#2a2f43 !important; }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt /* Multi-Slot Booking */{ background:#2a2f43; }body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{ border-color:#2a2f43; }body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt{ color:#2a2f43; }.booked-appt-list .timeslot.has-title .booked-public-appointment-title { color:inherit; }</style><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
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
        .sc_accordion.sc_accordion_style_1 .sc_accordion_item .sc_accordion_title:hover,.sc_tabs.sc_tabs_style_1 .sc_tabs_titles li a:hover,.sc_tooltip_parent,.page_top_wrap.page_top_title .breadcrumbs,.widget_area ul li:before,.widget_area ul li .count,.widget_area ul li.recentcomments span.comment-author-link a,.widget_area .widget_product_tag_cloud a:hover,.widget_area .widget_tag_cloud a:hover,.post_info.post_info_bottom .post_info_item,.widget_area ul li.recentcomments .comment-author-link,blockquote.sc_quote.sc_quote_style_2 .sc_quote_title,.sc_blogger.template_masonry .post_content.isotope_item_content .post_title a:hover,.sc_blogger.template_masonry .post_content.isotope_item_content .post_date,.sc_blogger.template_masonry .post_format_link .post_featured .content a:hover,.sc_blogger.template_classic .post_content.isotope_item_content .post_title a:hover,.sc_blogger.template_classic .post_content.isotope_item_content .post_date,.sc_blogger.template_classic .post_format_link .post_featured .content a:hover,.isotope_filters a.active,.isotope_filters a:hover,.menu_main_wrap .menu_main_nav li>a:hover,.menu_main_wrap .menu_main_nav li>a:hover:after,.sc_blogger.layout_news .post_date,.widget_area ul li a:hover,.widget_area .post_title a:hover,.sc_table.recent_jobs td a:hover,.sc_list.sc_list_style_ul li:before,li.bbp-topic-title a:hover,.widget_area .widget_display_replies ul li a,.widget_area .widget_display_replies a.bbp-reply-topic-title:hover,.search_wrap.search_style_regular .search_icon,.menu_user_wrap .menu_user_nav li li>a:hover,.popup_wrap .popup_close:hover,.pagination_wrap .pager_next,.pagination_wrap .pager_prev,.pagination_wrap .pager_last,.pagination_wrap .pager_first,.pagination_single>.pager_numbers,.pagination_slider .pager_cur:hover,.pagination_slider .pager_cur:focus,.pagination_pages>.active,.pagination_pages>a.pager_dot,.pagination_wrap .pager_next:hover,.pagination_wrap .pager_prev:hover,.pagination_wrap .pager_last:hover,.pagination_wrap .pager_first:hover,.menu_main_wrap .menu_main_nav>li.open>a,.menu_main_wrap .menu_main_nav>li.open>a:after,#buddypress div.item-list-tabs ul li a:hover,#booking_month_nav_prev .booking_month_nav_button:hover:before,#booking_month_nav_next .booking_month_nav_button:hover:before,#booking_slot_form div.booking_float_left.booking_height_20.booking_line_20 a:hover,#booking_slot_form div.booking_font_custom.booking_float_right.text_right:hover,.close_booking:hover,.widget_area .widget_text a,.widget_area .post_info a,a:hover,.copyright_wrap a,.widget_area .widget_calendar td a.day_wrap,.page_top_wrap .breadcrumbs a.breadcrumbs_item,a,.comments_list_wrap .comment_info>.comment_date>.comment_date_value,.comments_list_wrap .comment_info>.comment_time,.isotope_item_courses .post_featured .post_title a:hover{
            color:#b2221f
        }
        .menu_user_wrap .menu_user_nav li li>a:hover{
            color:#b2221f !important
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
            border-color:#222636
        }
        .menu_main_wrap .menu_main_nav>li ul::-webkit-scrollbar-thumb{
            background-color:#222636
        }

    </style>

    <style type="text/css" id="my_timeline_1"> #tl1 .timeline_line, #content #tl1 .timeline_line{ width: 1044px; } #tl1 .t_line_view, #content #tl1 .t_line_view { width: 1044px; } #tl1 .t_line_m, #content #tl1 .t_line_m { width: 520px; } #tl1 .t_line_m.right, #content #tl1 .t_line_m.right { left: 521px; width: 521px; } #tl1 .t_node_desc span, #content #tl1 .t_node_desc span { background: #67d3e0; } #tl1 .t_node_desc span:after, #content #tl1 .t_node_desc span:after { border-top-color: #67d3e0; } #tl1 .t_line_node, #content #tl1 .t_line_node { color: #67d3e0; } #tl1 .t_line_node:after, #content #tl1 .t_line_node:after { background: #67d3e0; } #tl1 .item.item_node_hover:before, #content #tl1 .item.item_node_hover:before { background: #67d3e0; } #tl1 .item.item_node_hover:after, #content #tl1 .item.item_node_hover:after { border-top-color: #67d3e0; } #tl1 #t_line_right:hover, #content #tl1 #t_line_right:hover, #tl1 #t_line_left:hover, #content #tl1 #t_line_left:hover { color: #67d3e0; } #tl1 .item h2, #content #tl1 .item h2 { font-size:0px; color:#2d2d2d; text-align: left; line-height:0px; margin-left: 27px; margin-right: 27px; margin-top: 27px; font-weight:normal; font-style:normal; } #tl1 .item span, #content #tl1 .item span { text-align: left; margin-bottom: 27px; margin-left: 27px; margin-right: 27px; } #tl1 .item, #content #tl1 .item { width: 255px; height: 450px;background:#ffffff url() repeat;font-size:14px; color:#7f828f; line-height:22px; font-weight:normal; font-style:normal; box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); -moz-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); -webkit-transition: box-shadow 0.3s; -moz-transition: box-shadow 0.3s; transition: box-shadow 0.3s; zoom: 1; filter: progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=0, Direction=0), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=5, Direction=90), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=5, Direction=180), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=0, Direction=270); } #tl1 .item_open h2, #content #tl1 .item_open h2 { font-size:0px; color:#2d2d2d; line-height:0px; font-weight:normal; font-style:normal; } #tl1 .item_open, #content #tl1 .item_open{ width: 490px; height: 450px;background:#ffffff url() repeat; font-size:12px; color:#4d4d4d; line-height:12px; font-weight:normal; font-style:normal; -moz-box-shadow: 0px 0px 6px rgba(0,0,0,0.5); -webkit-box-shadow: 0px 0px 6px rgba(0,0,0,0.5); box-shadow: 0px 0px 6px rgba(0,0,0,0.5); zoom: 1; filter: progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=0, Direction=0), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=5, Direction=90), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=5, Direction=180), progid:DXImageTransform.Microsoft.Shadow(Color=#888888, Strength=0, Direction=270); } #tl1 .item .con_borderImage, #content #tl1 .item .con_borderImage { border:0px; border-bottom: 0px solid ;height: 235px;} #tl1 .item .post_date, #content #tl1 .item .post_date { border:0px;background: } #tl1 .item_open .con_borderImage, #content #tl1 .item_open .con_borderImage { border-bottom: 0px solid #1986ac ; } #tl1 .item_open_cwrapper, #tl1 .item_open .con_borderImage, #content #tl1 .item_open_cwrapper, #content #tl1 .item_open .con_borderImage { width: 490px; } #tl1 .item_open .con_borderImage{ height:150px; } .timeline.flatButton .item .read_more , #content .timeline.flatButton .item .read_more{font-size:12px !important;}.timeline.flatButton .item .read_more, .timeline.flatWideButton .item .read_more, #content .timeline.flatButton .item .read_more, #content .timeline.flatWideButton .item .read_more{ font-size:12px !important; line-height:12px !important; }.timeline .item .read_more, #content .timeline .item .read_more { font-size:20px !important; line-height:20px !important; } #tl1 .item_open .t_close:hover, #content #tl1 .item_open .t_close:hover{ background:#8cc80c; } #tl1.flatButton .item .read_more, #tl1.flatWideButton .item .read_more, #content #tl1.flatButton .item .read_more, #content #tl1.flatWideButton .item .read_more { background:#67d3e0; margin:27px; } #tl1.flatButton .mCS-light-thin > .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, #tl1.flatWideButton .mCS-light-thin > .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, #content #tl1.flatButton .mCS-light-thin > .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, #content #tl1.flatWideButton .mCS-light-thin > .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar { background:#67d3e0; } #tl1 .item .read_more:hover, #content #tl1 .item .read_more:hover{ background:#8cc80c; } #tl1.flatButton .item_open.item_open_noImg .t_close, #tl1.flatWideButton .item_open.item_open_noImg .t_close, #content #tl1.flatButton .item_open.item_open_noImg .t_close, #content #tl1.flatWideButton .item_open.item_open_noImg .t_close { color:#67d3e0 !important; } #tl1.flatButton .item_open.item_open_noImg .t_close:hover, #tl1.flatWideButton .item_open.item_open_noImg .t_close:hover, #content #tl1.flatButton .item_open.item_open_noImg .t_close:hover, #content #tl1.flatWideButton .item_open.item_open_noImg .t_close:hover { color:#8cc80c !important; } #tl1 .item .read_more, #content #tl1 .item .read_more, #tl1 .item_open .t_close, #content #tl1 .item_open .t_close { /* transparent background */ filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#44000000', endColorstr='#44000000'); } #tl1 .t_node_desc, #content #tl1 .t_node_desc { /* IE transparent background */ filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#cc1a86ac', endColorstr='#cc1a86ac'); } #tl1 .timeline_open_content, #content #tl1 .timeline_open_content { padding:20px; } #tl1 .mCSB_dragger_bar{ background:#1986ac !important; } </style>



    

    
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://alliance.themerex.net/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }
        </style>
    </noscript>
</head>


<body class="bp-legacy attachment attachment-template-default single single-attachment postid-497 attachmentid-497 attachment-jpeg themerex_body body_style_wide body_filled theme_skin_alliance article_style_stretch layout_single-standard template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_show top_panel_over menu_ user_menu_show sidebar_show sidebar_right responsive_menu wpb-js-composer js-comp-ver-5.5.2 vc_responsive no-js">
    
    
    <div class="body_wrap">

        
        <div class="page_wrap "  style="background-color: #f4f7f9;">


            <header class="top_panel_wrap">
                
                <div class="menu_user_wrap">
                    <div class="logo" style="background-color:  #f4f7f9;">
                        <a href="#""><img src="http://www.hospitaldealvorada.com.br/images/layout/logo.png" alt="Hospital de Alvorada" class="logo_main" ></a>
                    </div>
                    <div class="menu_user_area menu_user_right menu_user_nav_area m_top">  
                        <ul id="menu_user" class="menu_user_nav">



                            <li class="menu_user_register"><a href="#popup_registration" class="popup_link popup_register_link">Register</a><div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
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
                                </div>  <!-- /.registration_wrap -->
                            </div>      <!-- /.user-popUp -->
                        </li>
                        <li class="menu_user_login"><a href="#popup_login" class="popup_link popup_login_link">Login</a><div id="popup_login" class="popup_wrap popup_login bg_tint_light popup_half">
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
                                        </div>              <div class="popup_form_field submit_field"><input type="submit" class="submit_button" value="Login" disabled="disabled"></div>
                                        <div class="result message_block"></div>
                                    </form>
                                </div>
                            </div>  <!-- /.login_wrap -->
                        </div>      <!-- /.popup_login -->
                    </li>

                </ul>
                <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
                    <a href="#" class="search_icon "></a>
                    <div class="search_form_wrap">
                        <form role="search" method="get" class="search_form" action="http://alliance.themerex.net/">
                            <button type="submit" class="search_submit " title="Start search"></button>
                            <input type="text" class="search_field" placeholder="Search ..." value="" name="s" title="Search ..." />
                        </form>
                    </div>
                    <div class="search_results widget_area bg_tint_light"><a class="search_results_close ncel"></a><div class="search_results_content"></div></div>
                </div>                                                      <div class="menu_button show_menu">Show Menu</div>
            </div>
        </div> 
    </header>
    <aside class="menu_main_wrap">
        <nav role="navigation" class="menu_main_nav_area">
            <ul id="menu_main" class="menu_main_nav">
                <li id="menu-item-804" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-804"><a>Notícias</a>
                    <ul class="sub-menu">
                        <li id="menu-item-857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-857"><a href="http://alliance.themerex.net/">Style 1</a></li>
                        <li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990"><a href="http://alliance.themerex.net/home-style-2/">Style 2</a></li>
                        <li id="menu-item-1050" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1050"><a href="http://alliance.themerex.net/home-style-3/">Style 3</a></li>
                    </ul>
                </li>
                <li id="menu-item-1951" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1951"><a>Avisos</a>
                    <ul class="sub-menu">
                        <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="http://alliance.themerex.net/color-scheme-1/">Color Scheme 1</a></li>
                        <li id="menu-item-1953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1953"><a href="http://alliance.themerex.net/color-scheme-2/">Color Scheme 2</a></li>
                        <li id="menu-item-1952" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1952"><a href="http://alliance.themerex.net/color-scheme-3/">Color Scheme 3</a></li>
                    </ul>
                </li>
                <li id="menu-item-805" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-805"><a>Documentos</a>
                    <ul class="sub-menu">
                        <li id="menu-item-618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-618"><a href="http://alliance.themerex.net/ceo/">CEO</a></li>
                        <li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442"><a href="http://alliance.themerex.net/team-leaders/">Team Leaders</a></li>
                        <li id="menu-item-357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-357"><a href="http://alliance.themerex.net/department-page/">Department</a></li>
                    </ul>
                </li>
                <li id="menu-item-282" class=" menu-item menu-item-type-taxonomy menu-item-object-category menu-item-282"><a href="http://alliance.themerex.net/category/post-formats/">Grupos</a></li>
                <li id="menu-item-806" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-806"><a>Eventos</a>
                    <ul class="sub-menu">
                        <li id="menu-item-590" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590"><a href="http://alliance.themerex.net/trainings/">Trainings</a></li>
                        <li id="menu-item-730" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-730"><a href="http://alliance.themerex.net/tests-and-quizzes/">Tests and Quizzes</a></li>
                        <li id="menu-item-935" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-935"><a href="http://alliance.themerex.net/tutorials/">Tutorials</a></li>
                    </ul>
                </li>
                <li id="menu-item-1093" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1093"><a>Suporte TI</a>
                    <ul class="sub-menu">
                        <li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094"><a href="http://alliance.themerex.net/vacancies/">Vacancies</a></li>
                        <li id="menu-item-1113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1113"><a href="http://alliance.themerex.net/resume-examples/">Resumes</a></li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>               </nav>
</aside>

<div class="page_content_wrap"  >


    <div class="content_wrap">
        <div class="content">       
            <article class="post_item post_item_attachment template_attachment post-497 attachment type-attachment status-inherit hentry">

                <h1 class="post_title"><span class="post_icon icon-book-2"></span>BEM VINDO</h1>

                <div class="post_featured">
                    <div class="post_thumb post_nav" data-image="http://alliance.themerex.net/wp-content/uploads/2015/05/51.jpg" data-title="51">
                        <img class="wp-post-image" width="1150" alt="51.jpg" src="../wp-content/uploads/2015/05/51.jpg" itemprop="image">                       <a class="post_nav_item post_nav_prev" href="">
                        <span class="post_nav_info">
                            <span class="post_nav_info_title">Anterior</span>
                            <span class="post_nav_info_description">Banner Secundário</span>
                        </span>
                    </a>
                    <a class="post_nav_item post_nav_next" href="">
                        <span class="post_nav_info">
                            <span class="post_nav_info_title">Próximo</span>
                            <span class="post_nav_info_description">Banner principal</span>
                        </span>
                    </a>
                </div>
            </div>
        </article>


        <article>

            <h1 class="post_title"><span class="post_icon icon-book-2"></span>Notícias</h1>
            <div id="tl1" class="timeline flatLine flatNav flatButton"> 

                <div class="item" data-id="11/04/2015" data-description="Lorem ispum dolor">
                    <a style="display:block;" class="con_borderImage">
                        <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/62-_resized255x235.jpg" alt="" />
                    </a>
                    <div class="post_date">11
                        <span>APR</span>
                    </div>
                    <h2>Lorem ispum dolor</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</span>
                    <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                </div>
                <div class="item_open" data-id="11/04/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort1">
                    <div class="item_open_content">
                        <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                    </div>
                    <div class="item" data-id="16/04/2015" data-description="Excepteur sint occaecat">
                        <a style="display:block;" class="con_borderImage">
                            <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/63-_resized255x235.jpg" alt="" />
                        </a>
                        <div class="post_date">16
                            <span>APR</span>
                        </div>
                        <h2>Excepteur sint occaecat</h2>
                        <span>Excepteur sint occaecat cupidatat non proident, suntculpa qui officia deserunt.</span>
                        <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                    </div>
                    <div class="item_open" data-id="16/04/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort2">
                        <div class="item_open_content">
                            <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                        </div>
                        <div class="item" data-id="23/04/2015" data-description="Ut enim ad minim veniam">
                            <a style="display:block;" class="con_borderImage">
                                <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/641-_resized255x235.jpg" alt="" />
                            </a>
                            <div class="post_date">23
                                <span>APR</span>
                            </div>
                            <h2>Ut enim ad minim veniam</h2>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                            <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                        </div>
                        <div class="item_open" data-id="23/04/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort3">
                            <div class="item_open_content">
                                <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                            </div>
                            <div class="item" data-id="07/05/2015" data-description="Duis aute irure dolor">
                                <a style="display:block;" class="con_borderImage">
                                    <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/65-_resized255x235.jpg" alt="" />
                                </a>
                                <div class="post_date">07
                                    <span>MAY</span>
                                </div>
                                <h2>Duis aute irure dolor</h2>
                                <span>Duis aute irure dolor in reprehenderit in voluptate esse cillum dolore eu fugiat.</span>
                                <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                            </div>
                            <div class="item_open" data-id="07/05/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort4">
                                <div class="item_open_content">
                                    <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                                </div>
                                <div class="item" data-id="18/05/2015" data-description="Consectetur adipisicing">
                                    <a style="display:block;" class="con_borderImage">
                                        <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/57-_resized255x235.jpg" alt="" />
                                    </a>
                                    <div class="post_date">18
                                        <span>MAY</span>
                                    </div>
                                    <h2>Consectetur adipisicing</h2>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut.</span>
                                    <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-id="27/05/2015" data-description="Cupidatat non proident">
                            <a style="display:block;" class="con_borderImage">
                                <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/53-_resized255x235.jpg" alt="" />
                            </a>
                            <div class="post_date">27
                                <span>MAY</span>
                            </div>
                            <h2>Cupidatat non proident</h2>
                            <span>Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                            <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                        </div>
                        <div class="item_open" data-id="27/05/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort6">
                            <div class="item_open_content">
                                <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                            </div>
                            <div class="item" data-id="02/06/2015" data-description="Laboris nisi ut aliquip">
                                <a style="display:block;" class="con_borderImage">
                                    <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/54-_resized255x235.jpg" alt="" />
                                </a>
                                <div class="post_date">02
                                    <span>JUN</span>
                                </div>
                                <h2>Laboris nisi ut aliquip</h2>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation laboris nisi ut aliquip ex ea.</span>
                                <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                            </div>
                            <div class="item_open" data-id="02/06/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort7">
                                <div class="item_open_content">
                                    <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                                </div>
                                <div class="item" data-id="15/06/2015" data-description="Reprehenderit in voluptate">
                                    <a style="display:block;" class="con_borderImage">
                                        <img src="http://alliance.themerex.net/wp-content/uploads/2015/06/59-_resized255x235.jpg" alt="" />
                                    </a>
                                    <div class="post_date">15
                                        <span>JUN</span>
                                    </div>
                                    <h2>Reprehenderit in voluptate</h2>
                                    <span>Duis aute irure dolor in reprehenderit in voluptate velit dolore eu fugiat nulla.</span>
                                    <a class="read_more" href="http://alliance.themerex.net/index.php/category/post-formats-with-sidebar/">Read more</a>
                                </div>
                                <div class="item_open" data-id="15/06/2015" data-access="http://alliance.themerex.net/wp-admin/admin-ajax.php?action=ctimeline_frontend_get&timeline=1&id=sort8">
                                    <div class="item_open_content">
                                        <img class="ajaxloader" src="http://alliance.themerex.net/wp-content/plugins/content_timeline/images/loadingAnimation.gif" alt="" /> </div>
                                    </div>

                                </div>

                                <section class="related_wrap related_wrap_empty"></section>

                            </div>

                            <div class="sidebar widget_area bg_tint_light sidebar_style_light" style="background: #b2221f;" role="complementary"> 

                                <div class="grid-sizer"></div><div class="gutter-sizer"></div>

                                <aside id="themerex_widget_calendar-2" class="widget_number_6 widget widget_calendar">
                                    
                                    <h5 class="widget_title"></h5>
                                    <table id="wp-calendar-591983960" class="wp-calendar">
                                        <thead>
                                            <tr>
                                                <th class="month_prev">
                                                    <a href="#" data-type="post" data-year="2015" data-month="07" title="View posts for July 2015"></a></th>
                                                    <th class="month_cur" colspan="5">October </th>
                                                    <th class="month_next">&nbsp;</th>
                                                </tr><tr>
                                                <th class="weekday" scope="col" title="Monday">M</th><th class="weekday" scope="col" title="Tuesday">T</th><th class="weekday" scope="col" title="Wednesday">W</th><th class="weekday" scope="col" title="Thursday">T</th><th class="weekday" scope="col" title="Friday">F</th><th class="weekday" scope="col" title="Saturday">S</th><th class="weekday" scope="col" title="Sunday">S</th></tr></thead><tbody><tr><td class="day"><span class="day_wrap">1</span></td><td class="day"><span class="day_wrap">2</span></td><td class="day"><span class="day_wrap">3</span></td><td class="day"><span class="day_wrap">4</span></td><td class="day"><span class="day_wrap">5</span></td><td class="day"><span class="day_wrap">6</span></td><td class="day"><span class="day_wrap">7</span></td></tr><tr><td class="day"><span class="day_wrap">8</span></td><td class="day"><span class="day_wrap">9</span></td><td class="day"><span class="day_wrap">10</span></td><td class="day"><span class="day_wrap">11</span></td><td class="day"><span class="day_wrap">12</span></td><td class="day"><span class="day_wrap">13</span></td><td class="day"><span class="day_wrap">14</span></td></tr><tr><td class="day"><span class="day_wrap">15</span></td><td class="day"><span class="day_wrap">16</span></td><td class="today"><span class="day_wrap">17</span></td><td class="day"><span class="day_wrap">18</span></td><td class="day"><span class="day_wrap">19</span></td><td class="day"><span class="day_wrap">20</span></td><td class="day"><span class="day_wrap">21</span></td></tr><tr><td class="day"><span class="day_wrap">22</span></td><td class="day"><span class="day_wrap">23</span></td><td class="day"><span class="day_wrap">24</span></td><td class="day"><span class="day_wrap">25</span></td><td class="day"><span class="day_wrap">26</span></td><td class="day"><span class="day_wrap">27</span></td><td class="day"><span class="day_wrap">28</span></td></tr><tr><td class="day"><span class="day_wrap">29</span></td><td class="day"><span class="day_wrap">30</span></td><td class="day"><span class="day_wrap">31</span></td><td class="pad" colspan="4"><span class="day_wrap">&nbsp;</span></td></tr></tbody></table></aside>



                                                <aside id="themerex_widget_recent_posts-6" class="widget_number_2 widget widget_recent_posts"><h5 class="widget_title">Latest Groups News</h5><article class="post_item with_thumb first"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Id est laborum et dolorum fuga" src="http://alliance.themerex.net/wp-content/uploads/2015/05/52-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/id-est-laborum-et-dolorum-fuga/">Id est laborum et dolorum fuga</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/id-est-laborum-et-dolorum-fuga/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Inventore veritatis et quasi" src="http://alliance.themerex.net/wp-content/uploads/2015/05/60-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/inventore-veritatis-et-quasi/">Inventore veritatis et quasi</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/inventore-veritatis-et-quasi/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Ed quia non numquam eius" src="http://alliance.themerex.net/wp-content/uploads/2015/05/59-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/ed-quia-non-numquam-eius/">Ed quia non numquam eius</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/ed-quia-non-numquam-eius/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Consectetur adipiscing elit" src="http://alliance.themerex.net/wp-content/uploads/2015/05/53-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/consectetur-adipiscing-elit/">Consectetur adipiscing elit</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/consectetur-adipiscing-elit/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article><article class="post_item with_thumb"><div class="post_thumb"><img class="wp-post-image" width="75" height="75" alt="Masonry Gallery" src="http://alliance.themerex.net/wp-content/uploads/2015/05/52-75x75.jpg"></div><div class="post_content"><h6 class="post_title"><a href="http://alliance.themerex.net/masonry-gallery-1/">Masonry Gallery</a></h6><div class="post_info"><span class="post_info_item post_info_posted"><a href="http://alliance.themerex.net/masonry-gallery-1/" class="post_info_date">July 21, 2015</a></span><span class="post_info_item post_info_posted_by">by <a href="http://alliance.themerex.net/author/admin/" class="post_info_author">Kate Dillon (Development)</a></span></div></div></article></aside>


                                                <aside id="archives-3" class="widget_number_5 widget widget_archive"><h5 class="widget_title">Archives</h5>     <ul>
                                                    <li><a href='http://alliance.themerex.net/2015/07/'>July 2015</a></li>
                                                    <li><a href='http://alliance.themerex.net/2015/06/'>June 2015</a></li>
                                                    <li><a href='http://alliance.themerex.net/2015/05/'>May 2015</a></li>
                                                    <li><a href='http://alliance.themerex.net/2015/04/'>April 2015</a></li>
                                                    <li><a href='http://alliance.themerex.net/2015/03/'>March 2015</a></li>
                                                </ul>
                                            </aside>

                                        </div> 

                                    </div>      
                                </div>      


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


                           

                        </body>
                        </html>