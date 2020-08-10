	<!--Mobile Header Middle-->
    <div class='gt3_header_builder__section gt3_header_builder__section--middle__mobile gt3_header_builder__section--hide_on_tablet gt3_header_builder__section--show_on_mobile'>
               <div class='gt3_header_builder__section-container container'>
                  <div class='middle_left__mobile left header_side--custom-align header_side---align header_side'>
                     <div class='header_side_container'>
                        <div class='logo_container'><a href="{{route('homepage')}}">
                           <img class="default_logo" src="{{asset($nizam->logo)}}" alt="logo" style="height:41px;"></a></div>
                     </div>
                  </div>
                  <div class='middle_right__mobile right header_side--custom-align header_side---align header_side'>
                     <div class='header_side_container'>
                        <div class="gt3_header_builder_component gt3_header_builder_menu_component">
                           <nav class="main-menu main_menu_container menu_line_enable">
                           <ul id="menu-main-menu-2" class="menu">
								  <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent
								   current_page_parent current_page_ancestor menu-item-has-children menu-item-651">
								     <a href="{{route('homepage')}}"><span>@lang('lang.anasehife')</span></a>
								  </li>
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396">
								  <a href="{{route('clinic')}}"><span>@lang('lang.klinikalar')</span></a>
								  </li>
								  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-878">
									 <a><span>@lang('lang.sobeler')</span></a>
									 <ul class="sub-menu">
									 @foreach($dcategory as $d)
										<li class="menu-item menu-item-type-post_type menu-item-object-project menu-item-880">
										    <a href="{{route('department',$d->slug)}}"><span>
											@if(App::isLocale('az'))
                                 {{$d->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$d->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$d->basliq_ru}}
                                 @endif</span></a></li>@endforeach
										</ul>
								  </li>
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394">
								  <a href="{{route('doctor')}}"><span>@lang('lang.hekimler')</span></a>
								  </li>
								  <li id="menu-item-878" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children
								   menu-item-878">
                        <a><span>@lang('lang.saglamlig')</span></a>
                        <ul class="sub-menu">
                        @foreach($xeberkateqoriya as $xeberkate)
                           <li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-project menu-item-880">
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
                              </span></a>
                           </li>
                        @endforeach   
                        </ul>
                     </li>
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394">
									  <a href="{{route('about')}}"><span>@lang('lang.haqqimizda')</span></a></li>
								  
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396">
								  <a href="{{route('contact')}}"><span>@lang('lang.elaqe')</span></a></li>
							   </ul>    </nav>
                           <div class="mobile-navigation-toggle">
                              <div class="toggle-box">
                                 <div class="toggle-inner"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			</div>
			<!--End Mobile Header Middle-->