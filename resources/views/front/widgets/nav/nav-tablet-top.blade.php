<!--Tablet Header Top-->
           
<div class='gt3_header_builder__section gt3_header_builder__section--top__tablet gt3_header_builder__section--show_on_tablet gt3_header_builder__section--hide_on_mobile'>
				<div class='gt3_header_builder__section-container container'>
				   <div class='top_left__tablet left header_side--custom-align header_side---align header_side'>
					  <div class='header_side_container'>
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
									 <a><span>@lang('lang.saglamlig')</span></a>
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
				   <div class='top_right__tablet right header_side--custom-align header_side---align header_side'>
					  <div class='header_side_container'>
						
						 <div class="gt3_header_builder_component gt3_header_builder_delimiter_component gt3_delimiter2"></div>
						 <div class="gt3_header_builder_component gt3_header_builder_text_component">
							<p>
							 <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->facebook}}" target="_blank" data-color="#56b8e1" data-hover-color="#31609f" 
							 style="font-size: 18px; color: #56b8e1; margin-right: 15px;" rel="noopener"><i class="fa fa-facebook"> </i></a>
							 <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->youtube}}" target="_blank" data-color="#56b8e1" data-hover-color="#31609f" 
							 style="font-size: 18px; color: #56b8e1; margin-right: 15px;" rel="noopener"><i class="fa fa-youtube"> </i></a>
							 <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->instagram}}" target="_blank" data-color="#56b8e1" data-hover-color="#31609f" 
							 style="font-size: 18px; color: #56b8e1;" rel="noopener"><i class="fa fa-instagram"> </i></a> </p>
						 </div>
						 
					  </div>
				   </div>
				</div>
       </div>
       <!--End Tablet Header Top-->