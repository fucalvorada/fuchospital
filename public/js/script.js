 window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/alliance.themerex.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
 !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);

 jQuery(document).ready(function(){
  jQuery(".flat-icon").flatshadow({
    fade: false,
    angle: "SE",
    color:  " #2a2f43 ",
    boxShadow: " #222636 "
  }); 
});


 jQuery(document).ready(function() {
  THEMEREX_GLOBALS["strings"] = {
    bookmark_add:"Add the bookmark",
    bookmark_added: "Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab \'Bookmarks\'",
    bookmark_del:       "Delete this bookmark",
    bookmark_title:      "Enter bookmark title",
    bookmark_exists:     "Current page already exists in the bookmarks list",
    search_error: "Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.",email_confirm:     "On the e-mail address <b>%s</b> we sent a confirmation email.<br>Please, open it and click on the link.",
    reviews_vote:     "Thanks for your vote! New average rating is:",
    reviews_error:       "Error saving your vote! Please, try again later.",
    error_like:          "Error saving your like! Please, try again later.",
    error_global:        "Global error text",
    name_empty:         "The name can\'t be empty",
    name_long:           "Too long name",
    email_empty:            "Too short (or empty) email address",
    email_long:            "Too long email address",
    email_not_valid:       "Invalid email address",
    subject_empty:      "The subject can\'t be empty",
    subject_long:     "Too long subject",
    text_empty:          "The message text can\'t be empty",
    text_long:           "Too long message text",
    send_complete:      "Send message complete!",
    send_error:            "Transmit failed!",
    login_empty:         "The Login field can\'t be empty",
    login_long:           "Too long login field",
    login_success:       "Login success! The page will be reloaded in 3 sec.",
    login_failed:      "Login failed!",
    password_empty:     "The password can\'t be empty and shorter then 4 characters",
    password_long:     "Too long password",
    password_not_equal: "The passwords in both fields are not equal",
    registration_success:"Registration success! Please log in!",
    registration_failed:   "Registration failed!",
    geocode_error:       "Geocode was not successful for the following reason:",
    googlemap_not_avail: "Google map API not available!",
    editor_save_success:    "Post content saved!",
    editor_save_error:    "Error saving post data!",
    editor_delete_post:   "You really want to delete the current post?",
    editor_delete_post_header:"Delete post",
    editor_delete_success:    "Post deleted!",
    editor_delete_error:        "Error deleting post!",
    editor_caption_cancel:   "Cancel",editor_caption_close:  "Close"};});
 jQuery(document).ready(function() {THEMEREX_GLOBALS['ajax_url']       
   = 'http://alliance.themerex.net/wp-admin/admin-ajax.php';THEMEREX_GLOBALS['ajax_nonce']  
   = '614dc84bf0';THEMEREX_GLOBALS['ajax_nonce_editor'] = '0f13e17c13';THEMEREX_GLOBALS['ajax_login']   
   = false;THEMEREX_GLOBALS['site_url']       
   = 'http://alliance.themerex.net';THEMEREX_GLOBALS['vc_edit_mode']       = false;THEMEREX_GLOBALS['theme_font']      = 'Open Sans';THEMEREX_GLOBALS['theme_skin']        = 'alliance';THEMEREX_GLOBALS['theme_skin_bg']  = '';
   THEMEREX_GLOBALS['slider_height']  = 100;
   THEMEREX_GLOBALS['system_message']    = {message: '',status: '',header: ''};
   THEMEREX_GLOBALS['user_logged_in']    = false;
   THEMEREX_GLOBALS['toc_menu']        = 'float';


   THEMEREX_GLOBALS['toc_menu_home'] = false;
   THEMEREX_GLOBALS['toc_menu_top']    = false;
   THEMEREX_GLOBALS['menu_fixed']      = false;
   THEMEREX_GLOBALS['menu_relayout']   = 0;THEMEREX_GLOBALS['menu_responsive'] = 0;
   THEMEREX_GLOBALS['menu_slider']     = false;THEMEREX_GLOBALS['demo_time']       = 0;
   THEMEREX_GLOBALS['media_elements_enabled'] = true;
   THEMEREX_GLOBALS['ajax_search_enabled']   = true;THEMEREX_GLOBALS['ajax_search_min_length']   = 3;THEMEREX_GLOBALS['ajax_search_delay']       = 200;THEMEREX_GLOBALS['css_animation']      = true;
   THEMEREX_GLOBALS['menu_animation_in']  = '';THEMEREX_GLOBALS['menu_animation_out'] = '';
   THEMEREX_GLOBALS['popup_engine']    = 'magnific';THEMEREX_GLOBALS['popup_gallery']  = true;
   THEMEREX_GLOBALS['email_mask']       
   = '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';
   THEMEREX_GLOBALS['contacts_maxlength']  = 1000;THEMEREX_GLOBALS['comments_maxlength']   = 1000;
   THEMEREX_GLOBALS['remember_visitors_settings']   = false;THEMEREX_GLOBALS['admin_mode']          = false;
   THEMEREX_GLOBALS['isotope_resize_delta']    = 0.3;THEMEREX_GLOBALS['error_message_box'] = null;
   THEMEREX_GLOBALS['viewmore_busy']        = false;THEMEREX_GLOBALS['video_resize_inited'] = false;
   THEMEREX_GLOBALS['top_panel_height']        = 0;});
 jQuery(document).ready(function() {if (THEMEREX_GLOBALS['theme_font']=='') THEMEREX_GLOBALS['theme_font'] = 'Roboto';THEMEREX_GLOBALS['link_color'] = '';THEMEREX_GLOBALS['menu_color'] = '';THEMEREX_GLOBALS['user_color'] = '';});

 jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});

 