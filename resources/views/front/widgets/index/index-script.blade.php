<script type="text/javascript">
         var custom_blog_css = "";
         if (document.getElementById("custom_blog_styles")) {
             document.getElementById("custom_blog_styles").innerHTML += custom_blog_css;
         } else if (custom_blog_css !== "") {
             document.head.innerHTML += '<style id="custom_blog_styles" type="text/css">'+custom_blog_css+'</style>';
         }
      </script>
      <script>
         /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
         if ( typeof WebFontConfig === "undefined" ) {
             WebFontConfig = new Object();
         }
         WebFontConfig['google'] = {families: ['Montserrat:400,700', 'Lato:300,400,700']};
         
         (function() {
             var wf = document.createElement( 'script' );
             wf.src = "{{asset('front/')}}/ajax/webfont.js";
             wf.type = 'text/javascript';
             wf.async = 'true';
             var s = document.getElementsByTagName( 'script' )[0];
             s.parentNode.insertBefore( wf, s );
         })();
      </script>


<script type='text/javascript'>
         /* <![CDATA[ */
         var gt3_themes_core = {"ajaxurl":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-admin\/admin-ajax.php"};
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/mailchimp/js/scrollTo00e2.js?ver=1.5.7"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/jquery.form.min50fa.js?ver=4.2.1"></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var mailchimpSF = {"ajax_url":"https:\/\/livewp.site\/wp\/md\/sirona\/"};
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/mailchimp/js/mailchimp00e2.js?ver=1.5.7"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/mailchimp/js/datepicker7661.js?ver=5.4.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/revslider/public/assets/js/rbtools.minb3bd.js?ver=6.2.17"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/revslider/public/assets/js/rs6.minb3bd.js?ver=6.2.17"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min7c53.js?ver=2.9.14"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/themes/sirona/js/select2.full.min631d.js?ver=4.0.5"></script>


      <script type="text/javascript">
         jQuery(function($) {
             $('.date-pick').each(function() {
                 var format = $(this).data('format') || 'mm/dd/yyyy';
                 format = format.replace(/yyyy/i, 'yy');
                 $(this).datepicker({
                     autoFocusNextInput: true,
                     constrainInput: false,
                     changeMonth: true,
                     changeYear: true,
                     beforeShow: function(input, inst) { $('#ui-datepicker-div').addClass('show'); },
                     dateFormat: format.toLowerCase(),
                 });
             });
             d = new Date();
             $('.birthdate-pick').each(function() {
                 var format = $(this).data('format') || 'mm/dd';
                 format = format.replace(/yyyy/i, 'yy');
                 $(this).datepicker({
                     autoFocusNextInput: true,
                     constrainInput: false,
                     changeMonth: true,
                     changeYear: false,
                     minDate: new Date(d.getFullYear(), 1-1, 1),
                     maxDate: new Date(d.getFullYear(), 12-1, 31),
                     beforeShow: function(input, inst) { $('#ui-datepicker-div').removeClass('show'); },
                     dateFormat: format.toLowerCase(),
                 });
         
             });
         
         });
      </script>

<script type="text/javascript">function setREVStartSize(e){
         //window.requestAnimationFrame(function() {				 
         	window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
         	window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
         	try {								
         		var pw = document.getElementById(e.c).parentNode.offsetWidth,
         			newh;
         		pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
         		e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
         		e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
         		e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
         		e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
         		e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
         		e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
         		e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
         		if(e.layout==="fullscreen" || e.l==="fullscreen") 						
         			newh = Math.max(e.mh,window.RSIH);					
         		else{					
         			e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
         			for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
         			e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
         			e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
         			for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
         								
         			var nl = new Array(e.rl.length),
         				ix = 0,						
         				sl;					
         			e.tabw = e.tabhide>=pw ? 0 : e.tabw;
         			e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
         			e.tabh = e.tabhide>=pw ? 0 : e.tabh;
         			e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
         			for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
         			sl = nl[0];									
         			for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
         			var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
         			newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
         		}				
         		if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
         		document.getElementById(e.c).height = newh+"px";
         		window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
         	} catch(e){
         		console.log("Failure at Presize of Slider:" + e)
         	}					   
         //});
          };
      </script>
      <style type="text/css" title="dynamic-css" class="options-output">.gt3_delimiter1{height:100%;}.gt3_delimiter1{margin-right:0;margin-left:10px;}.gt3_delimiter2{height:100%;}.gt3_delimiter2{margin-right:0;margin-left:0;}.gt3_delimiter3{height:100%;}.gt3_delimiter3{margin-right:16px;margin-left:0;}.gt3_delimiter4{height:69px;}.gt3_delimiter4{margin-right:17px;margin-left:17px;}.gt3_delimiter5{height:100%;}.gt3_delimiter5{margin-right:0;margin-left:0;}.gt3_delimiter6{height:100%;}.gt3_delimiter6{margin-right:0;margin-left:0;}</style>
      <script type='text/javascript'>
         jQuery(document).ready(function(){
         
         });
      </script>



	  <script type="text/javascript">
		var custom_page_title_style = "@media only screen and (max-width: 1200px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}@media only screen and (max-width: 767px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}";
		if (document.getElementById("custom_page_title_style")) {
			document.getElementById("custom_page_title_style").innerHTML += custom_page_title_style;
		} else if (custom_page_title_style !== "") {
			document.body.innerHTML += '<style id="custom_page_title_style" type="text/css">'+custom_page_title_style+'</style>';
		}
	 </script>   
      <script>
         jQuery(document).ready(function ($) {
         	var element = jQuery('.gt3_tools_bar__icon_side_bar'),
         		sidebar = jQuery('.gt3_tools_bar'),
         		isLoaded = 0;
         
         	jQuery('.gt3_tools_bar').fadeIn("slow");
         
         	function toolbar_handler() {
         		var isActive = !element.hasClass('active');
         		lazyLoad();
         
         		element.toggleClass('active', isActive);
         		sidebar.toggleClass('active', isActive);
         		jQuery('body').toggleClass('active_tools_bar_sidebar', isActive);
         	}
         
         	function lazyLoad() {
         		if (0 !== isLoaded) return;
         		isLoaded = -1;
         		var imgs = jQuery('img[data-src]', sidebar);
         		if (imgs && imgs.length) {
         			var all_img = imgs.length;
         			imgs.each(function (key, img) {
         				img.setAttribute('src', img.getAttribute('data-src'));
         				img.removeAttribute('data-src');
         				img.addEventListener('load', function () {
         					--all_img;
         					if (!all_img) {
         						isLoaded = 1;
         						jQuery('.gt3_tools_bar').addClass('loaded');
         					}
         				})
         			})
         		}
         	}
         
         	jQuery('.gt3_tools_bar__icon_side_bar,.gt3_tools_bar__sidebar-cover').on('click', toolbar_handler);
         	jQuery(sidebar).on('swiperight', toolbar_handler);
         });
      </script>
     
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0"></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var gt3pg_ajax = {"url":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-admin\/admin-ajax.php"};
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-photo-video-gallery/dist/js/deprecated/frontend5d9b.js?ver=1596456327"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4"></script>
      <script type='text/javascript'>
         ( 'fetch' in window ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/dist/i18n.min08fa.js?ver=cced130522e86c87a37cd7b8397b882c"></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         ;window.wp && wp.i18n && wp.i18n.setLocaleData && wp.i18n.setLocaleData({"":{"domain":"gt3pg_pro","lang":"en_US"}}, "gt3pg_pro" );window.ajaxurl = window.ajaxurl || "https://livewp.site/wp/md/sirona/wp-admin/admin-ajax.php";
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-photo-video-gallery-pro/dist/js/deprecatedba51.js?ver=1.5.3.0"></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wpcf7 = {"apiSettings":{"root":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/contact-form-7/includes/js/scripts5fba.js?ver=5.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/coreaf7a.js?ver=1596547595"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/columnc321.js?ver=1596547646"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/themes/sirona/js/jquery.cookie7661.js?ver=5.4.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4"></script>
      <script type='text/javascript'>
         jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"M d, y","firstDay":1,"isRTL":false});});
      </script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var gt3_gt3theme = {"ajaxurl":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-admin\/admin-ajax.php","templateUrl":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-content\/themes\/sirona"};
         /* ]]> */
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/themes/sirona/js/themea2a1.js?ver=1.1.0_1595753481"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/themes/sirona/js/jquery.event.swipe7661.js?ver=5.4.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/wp-embed.min7661.js?ver=5.4.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/isotopeaf7a.js?ver=1596547595"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-projectc321.js?ver=1596547646"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-buttonc321.js?ver=1596547646"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-blog-simple355b.js?ver=1596547641"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/core/elementor/assets/js/slick8d1e.js?ver=1.2.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-portfoliocarouselc840.js?ver=1596547648"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-teamcarouselc840.js?ver=1596547648"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-counter4513.js?ver=1596547643"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-testimonialslite355b.js?ver=1596547641"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/comment-reply.min7661.js?ver=5.4.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/js/frontend-modules.min7c53.js?ver=2.9.14"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min7c53.js?ver=2.9.14"></script>
      <script type='text/javascript'>
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.14","urls":{"assets":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":207,"title":"Homepage%20%E2%80%93%20Sirona","excerpt":"","featuredImage":false}};
      </script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/elementor/assets/js/frontend.min7c53.js?ver=2.9.14"></script>
      <script type='text/javascript' src="{{asset('front/')}}/wp-content/plugins/gt3-themes-core/core/elementor/assets/js/core-frontend8d1e.js?ver=1.2.2"></script>
      <script type="text/javascript" id="gt3_custom_footer_js">jQuery(document).ready(function(){
         });
      </script>
   </body>
</html>