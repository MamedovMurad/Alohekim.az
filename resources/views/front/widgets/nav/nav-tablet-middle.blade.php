
			<!--Tablet Header Middle-->
            <div class='gt3_header_builder__section gt3_header_builder__section--middle__tablet gt3_header_builder__section--show_on_tablet gt3_header_builder__section--hide_on_mobile'>
               <div class='gt3_header_builder__section-container container'>
                  <div class='middle_left__tablet left header_side--custom-align header_side---align header_side'>
                     <div class='header_side_container'>
                        <div class='logo_container'><a href="{{route('homepage')}}">
                           <img class="default_logo" src="{{asset($nizam->logo)}}" alt="logo" style="height:41px;"></a>
                        </div>
                     </div>
                  </div>
                  <div class='middle_right__tablet right header_side--custom-align header_side---align header_side'>
                     <div class='header_side_container'>
                        <div class="gt3_header_builder_component gt3_header_builder_text_component">
                           <p><a class="gt3_icon_link gt3_custom_color" href="{{route('qeydiyyat')}}" target="_self" data-color="#31609f" data-hover-color="#ffffff" data-bg-color="#ffffff" data-hover-bg-color="#4cb8e0" data-border-color="#4cb8e0" data-hover-border-color="#4cb8e0" style="margin-left: .3em; font-size: 0.778em; font-weight: 400; line-height: 4em; display: inline-block; padding: 0 2.4em; letter-spacing: .2em; border: 1px solid #4cb8e0; border-radius: 3px;">Qeydiyyatdan Keç</a> </p>
                        </div>
                        <div class="gt3_header_builder_component gt3_header_builder_menu_component">
                           <nav class="main-menu main_menu_container menu_line_enable">
                           <ul id="menu-main-menu-1" class="menu">
							   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="{{route('homepage')}}">
							   <span>@lang('lang.anasehife')</span></a>
							   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="{{route('clinic')}}">
							   <span>@lang('lang.klinikalar')</span></a>
								  </li>
								  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-878">
									 <a><span>@lang('lang.sobeler')</span></a>
									 <ul class="sub-menu">
									 @foreach($dcategory as $d)
										<li class="menu-item menu-item-type-post_type menu-item-object-project menu-item-880">
										<a href="{{route('department',$d->slug)}}"><span>  @if(App::isLocale('az'))
                                 {{$d->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$d->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$d->basliq_ru}}
                                 @endif</span></a></li>
									@endforeach  
									</ul>
								  </li>
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"> 
									  <a href="{{route('doctor')}}"><span>@lang('lang.hekimler')</span></a></li>
									  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-878">
									 <a><span>@lang('lang.saglamliq')</span></a>
									 <ul class="sub-menu">
									 @foreach($xeberkateqoriya as $xeberkate)
										<li class="menu-item menu-item-type-post_type menu-item-object-project menu-item-880">
										<a href="{{route('news',$xeberkate->slug)}}"><span>
											   @if(App::isLocale('az'))
                                 {{$xeberkate->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$xeberkate->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$xeberkate->basliq_ru}}
                                 @endif</span></a></li>
									@endforeach  
									</ul>
								  </li>
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"> 
									  <a href="{{route('about')}}"><span>@lang('lang.haqqimizda')</span></a></li>
								 
								  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="{{route('contact')}}">
								  <span>@lang('lang.elaqe')</span></a></li>
							   </ul>
                           </nav>
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
      <!--End Tablet Header Middle-->