	<!--Mobile Menu-->
    <div class="mobile_menu_container">
            <div class='container'>
               <div class='gt3_header_builder_component gt3_header_builder_menu_component'>
                  <nav class='main-menu main_menu_container menu_line_enable'>
                     <ul id="menu-main-menu-3" class="menu">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394">
                           <a href="{{route('homepage')}}"><span>@lang('lang.anasehife')</span></a>
                           
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="{{route('about')}}">
                        <a href="{{route('clinic')}}"><span>@lang('lang.klinikalar')</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-889">
                           <a><span>@lang('lang.sobeler')</span></a>
                           <ul class="sub-menu">
                           @foreach($dcategory as $d)
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a href="{{route('department',$d->slug)}}"><span>
                              @if(App::isLocale('az'))
                                 {{$d->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$d->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$d->basliq_ru}}
                                 @endif
                              </span></a></li>
                              @endforeach    
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="{{route('about')}}">
                            <a href="{{route('doctor')}}"><span>@lang('lang.hekimler')</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-889">
                           <a href="#"><span>@lang('lang.saglamliq')</span></a>
                           <ul class="sub-menu">
                           @foreach($xeberkateqoriya as $xeberkate)
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
                              <a href="{{route('news',$xeberkate->slug)}}"><span>
                              @if(App::isLocale('az'))
                                 {{$xeberkate->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$xeberkate->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$xeberkate->basliq_ru}}
                                 @endif
                              </span></a></li>
                              @endforeach    
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="{{route('about')}}"><span>
                        @lang('lang.haqqimizda')</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="{{route('contact')}}"><span>
                        @lang('lang.elaqe')</span></a></li>
                     </ul>
                  </nav>
               </div>
            </div>
		 </div>
		 <!--End Mobile Menu-->
		 <script type="text/javascript">
                var custom_page_title_style = "@media only screen and (max-width: 1200px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}@media only screen and (max-width: 767px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}";
                if (document.getElementById("custom_page_title_style")) {
                    document.getElementById("custom_page_title_style").innerHTML += custom_page_title_style;
                } else if (custom_page_title_style !== "") {
                    document.body.innerHTML += '<style id="custom_page_title_style" type="text/css">'+custom_page_title_style+'</style>';
                }</script>