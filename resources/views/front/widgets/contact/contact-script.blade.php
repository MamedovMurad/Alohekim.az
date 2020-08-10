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
      <style>
         .gt3_tools_bar{
         position: fixed;
         right: -400px;
         top: 0;
         background-color: #ffffff;
         width: 400px;
         height: 100%;
         z-index: 10001;
         -webkit-transition: right .3s ease;
         -moz-transition: right .3s ease;
         transition: right .3s ease;
         }
         .gt3_tools_bar.active{
         right: 0px;
         }
         .gt3_tools_bar__sidebar-cover{
         content: "";
         width: 100vw;
         height: 100vh;
         position: fixed;
         left: 0;
         top: 0;
         visibility: hidden;
         opacity: 0;
         cursor: url({{asset('front/')}}/wp-content/plugins/gt3-theme-tools-bar/assets/close.png) 16 16, default;
         -webkit-transition: all .3s ease;
         -moz-transition: all .3s ease;
         transition: all .3s ease;
         }
         .active_tools_bar_sidebar .gt3_tools_bar__sidebar-cover {
         visibility: visible;
         opacity: 1;
         background: rgba(0, 0, 0, 0.7);
         z-index: 10000;
         }
         .gt3_tools_bar .gt3_tools_bar__icon_container{
         /*width: 50px;*/
         position: absolute;
         top: calc(40% - 88px);
         left: -45px;
         display: inline-block;
         box-shadow: -8px 8px 30px rgba(0, 0, 0, 0.07);
         }
         .gt3_tools_bar__sidebar{
         position: absolute;
         right: -17px;
         top: 0;
         height: 100%;
         width: 417px;
         padding: 30px;
         background: #ffffff;
         border-left: 1px solid #dcdcdc;
         color: #111;
         font-size: 14px;
         line-height: 1.7;
         overflow-x: hidden;
         overflow-y: auto;
         box-sizing: border-box;
         }
         .admin-bar .gt3_tools_bar__sidebar{
         top: 32px;
         height: calc(100% - 32px);
         }
         .gt3_tools_bar__icon {
         height: 45px;
         line-height: 45px;
         text-align: center;
         position: relative;
         background-color: #2f323a;
         color: #ffffff;
         cursor: pointer;
         left: 0;
         white-space: nowrap;
         -webkit-transition: all .2s ease-in-out;
         -moz-transition: all .2s ease-in-out;
         -ms-transition: all .2s ease-in-out;
         transition: all .2s ease-in-out;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_sale{
         background: #f73859;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_side_bar{
         background: #384259;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_support{
         background-color: #7ac7c4;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_docs{
         background: #c4edde;
         }
         .gt3_tools_bar__icon a{
         color: inherit;
         }
         .gt3_tools_bar__icon div.gt3_tools_bar__icon_src{
         display: inline-block;
         width: 45px;
         height: 45px;
         line-height: 55px;
         /*vertical-align: middle;*/
         border-radius: 0 !important;
         transition: opacity .2s ease;
         color: inherit;
         }
         .gt3_tools_bar__icon div.gt3_tools_bar__icon_src svg{
         width: 1em;
         height: 1em;
         display: inline-block;
         font-size: 21px;
         fill: currentColor;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_side_bar div.gt3_tools_bar__icon_src{
         background-position: 28px -36px;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_sale div.gt3_tools_bar__icon_src{
         background-position: -37px -4px;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_support div.gt3_tools_bar__icon_src{
         background-position: -68px -4px;
         }
         .gt3_tools_bar__icon.gt3_tools_bar__icon_docs div.gt3_tools_bar__icon_src{
         background-position: -4px 28px;
         }
         .gt3_tools_bar__icon_tooltip{
         font-size: 13px;
         width: 130px;
         height: 45px;
         font-weight: 400;
         line-height: 45px;
         text-align: center;
         transition: all .2s ease;
         padding: 0;
         box-sizing: border-box;
         background: rgba(0, 0, 0, 0.24);
         border-radius: 0;
         display: block;
         float: right;
         color: inherit;
         }
         .gt3_tools_bar__icon:hover .gt3_tools_bar__icon_tooltip{
         visibility: visible;
         opacity: 1;
         right: 110%;
         }
         .gt3_tools_bar__icon:hover{
         left: -130px;
         }
         .gt3_toolbar_button__container{
         text-align: center;
         padding-bottom: 40px;
         }
         .gt3_toolbar_button__container a{
         display: inline-block;
         vertical-align: top;
         padding: 8px 20px;
         font-size: 14px;
         font-weight: 500;
         line-height: 21px;
         color: #fff;
         border-width: 1px;
         border-style: solid;
         background-color: #82b440;
         border-color: #82b440;
         border-radius: 5px;
         transition: all 400ms;
         -webkit-transition: all 400ms;
         }
         .gt3_toolbar_button__container a:hover{
         color: #82b440;
         background-color: #ffffff;
         }
         .gt3_tools_bar__sidebar_container h2{
         text-align: center;
         font-size: 24px;
         line-height: 1.5;
         margin-bottom: 20px;
         }
         .gt3_tools_bar__sidebar_container a + a{
         margin-top: 25px;
         display: inline-block;
         }
         .gt3_tools_bar__sidebar_container a img{
         box-shadow: -8px 8px 30px rgba(0, 0, 0, 0.07);
         max-width: 100%;
         }
         .gt3_tools_bar .svg-preloader {
         width: 100%;
         height: 100%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         position: absolute;
         left: 0;
         top: 0;
         background: white;
         opacity: 1;
         visibility: visible;
         transition: opacity ease-in-out 400ms, visibility ease-in-out 400ms;
         }
         .gt3_tools_bar.loaded .svg-preloader {
         opacity: 0;
         visibility: hidden;
         }
         @media only screen and (max-width: 600px){
         .gt3_tools_bar{
         width: 300px;
         right: -300px;
         }
         .gt3_tools_bar__sidebar{
         width: 317px;
         }
         .gt3_tools_bar__sidebar_container h2{
         font-size: 20px;
         }
         .gt3_toolbar_button__container a{
         padding: 8px 10px;
         }
         .gt3_tools_bar__icon_tooltip{
         display: none;
         }
         .gt3_tools_bar__icon:hover{
         left: 0;
         }
         }
         @media only screen and (max-width: 480px){
         .gt3_tools_bar__icon_tooltip{
         display: none;
         }
         .gt3_tools_bar__icon:hover{
         left: 0;
         }
         }
         @media only screen and (max-width: 420px){
         .gt3_tools_bar{
         width: 250px;
         right: -250px;
         }
         .gt3_tools_bar__sidebar{
         width: 267px;
         }
         .gt3_tools_bar__sidebar_container h2{
         font-size: 16px;
         }
         }
      </style>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var gt3pg_ajax = {"url":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-admin\/admin-ajax.php"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-photo-video-gallery/dist/js/deprecated/frontend5d9b.js?ver=1596456327'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4'></script>
      <script type='text/javascript'>
         ( 'fetch' in window ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="{{asset('front/')}}/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/dist/i18n.min08fa.js?ver=cced130522e86c87a37cd7b8397b882c'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         ;window.wp && wp.i18n && wp.i18n.setLocaleData && wp.i18n.setLocaleData({"":{"domain":"gt3pg_pro","lang":"en_US"}}, "gt3pg_pro" );window.ajaxurl = window.ajaxurl || "https://livewp.site/wp/md/sirona/wp-admin/admin-ajax.php";
         /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-photo-video-gallery-pro/dist/js/deprecatedba51.js?ver=1.5.3.0'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wpcf7 = {"apiSettings":{"root":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
         /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/contact-form-7/includes/js/scripts5fba.js?ver=5.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/coreaf7a.js?ver=1596547595'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/columnc321.js?ver=1596547646'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/sirona/js/jquery.cookie7661.js?ver=5.4.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript'>
         jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"M d, y","firstDay":1,"isRTL":false});});
      </script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var gt3_gt3theme = {"ajaxurl":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-admin\/admin-ajax.php","templateUrl":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-content\/themes\/sirona"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/sirona/js/themea2a1.js?ver=1.1.0_1595753481'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/sirona/js/jquery.event.swipe7661.js?ver=5.4.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/wp-embed.min7661.js?ver=5.4.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-buttonc321.js?ver=1596547646'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/core/elementor/assets/js/slick8d1e.js?ver=1.2.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/tabs.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-processbar69e5.js?ver=1596547640'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-teamcarouselc840.js?ver=1596547648'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-blogboxed4513.js?ver=1596547643'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/dist/js/widgets/gt3-core-imageboxc321.js?ver=1596547646'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/comment-reply.min7661.js?ver=5.4.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/js/frontend-modules.min7c53.js?ver=2.9.14'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min7c53.js?ver=2.9.14'></script>
      <script type='text/javascript'>
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.14","urls":{"assets":"https:\/\/livewp.site\/wp\/md\/sirona\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":233,"title":"About%20Us%20%E2%80%93%20Sirona","excerpt":"","featuredImage":false}};
      </script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/elementor/assets/js/frontend.min7c53.js?ver=2.9.14'></script>
      <script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/gt3-themes-core/core/elementor/assets/js/core-frontend8d1e.js?ver=1.2.2'></script>
      <script type="text/javascript" id="gt3_custom_footer_js">jQuery(document).ready(function(){
         });
      </script>
   </body>
</html>