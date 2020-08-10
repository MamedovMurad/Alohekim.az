

     
      <footer class='main_footer fadeOnLoad clearfix' style=" background-color :#1f3d66;" id='footer'>
       
         <div class='top_footer column_4 align-left'>
            <div class='container'>
               <div class='row' style="padding-top:55px;padding-bottom:56px;">
                  <div class='span3'>
                     <div id="media_image-6" class="widget gt3_widget widget_media_image">
                        <img width="170" height="41" src="{{$nizam->logo}}" 
                        class="image wp-image-970  attachment-170x41 size-170x41" alt="" style="max-width: 100%; height: auto;"
                    title="logo2_new" /></div>
                  </div>
                  <div class='span3'>
                     <div id="recent-posts-4" class="widget gt3_widget widget_recent_entries">
                        <h4 class="widget-title">@lang('lang.saglamliq')</h4>
                        <ul>
                           @foreach($xeberfooter as $x)
                           <li>
                              <a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                              @if(App::isLocale('az'))
                              {{$x->title}}
                              @endif
                              @if(App::isLocale('en'))
                              {{$x->title_en}}
                              @endif
                              @if(App::isLocale('ru'))
                              {{$x->title_ru}}
                              @endif</a>
                              <span class="post-date">{{$x->created_at}}</span>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  <div class='span3'>
                     <div id="text-4" class="widget gt3_widget widget_text">
                        <h4 class="widget-title">@lang('lang.bizimleelaqe')</h4>
                        <div class="textwidget">
                           <p>{{$nizam->address}}<br />
                           {{$nizam->email}}<br />
                           {{$nizam->mobile}}
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class='span3'>
                     <div id="text-5" class="widget gt3_widget widget_text">
                        <h4 class="widget-title">@lang('lang.suretlilink')</h4>
                        <div class="textwidget">
                           <p> <a href="{{route('homepage')}}">@lang('lang.anasehife') </a></p>
                           <p><a href="{{route('clinic')}}">@lang('lang.klinikalar')</a></p>
                           <p><a href="{{route('doctor')}}">@lang('lang.hekimler')</a></p>
                           <p><a href="{{route('about')}}">@lang('lang.haqqimizda')</a></p>
                           <p><a href="{{route('contact')}}">@lang('lang.elaqe') </a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class='copyright align-' style="background-color:#1c375c;">
            <div class='container'>
               <div class='row' style="padding-top:23px;padding-bottom:23px;">
                  <div class='span12'>
                     <div class="row">
                        <div class="span6"> 
                        <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->facebook}}" target="_blank" data-color="#56b8e1" data-hover-color="#ffffff"
                           style="font-size: 20px; color: #56b8e1; margin-right: 22px;" rel="noopener"><i class="fa fa-facebook"> </i></a>
                          <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->youtube}}" target="_blank" data-color="#56b8e1" data-hover-color="#ffffff"
                           style="font-size: 20px; color: #56b8e1; margin-right: 22px;" rel="noopener"><i class="fa fa-youtube"> </i></a>
                            <a class="gt3_icon_link gt3_custom_color" href="{{$nizam->instagram}}" target="_blank" data-color="#56b8e1" data-hover-color="#ffffff" 
                            style="font-size: 20px; color: #56b8e1;" rel="noopener"><i class="fa fa-instagram"> </i></a> </div>
                        <div class="span6 a-right mobile_text_center">© 2020 AloHəkim. @lang('lang.buthuqqorunur').</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="gt3_tools_bar" style="display:none;">
           <div class="gt3_tools_bar__icon_container">
               <div class="gt3_tools_bar__icon ">
                  <a href="locale/az">
                  <div class="gt3_tools_bar__icon_src" ><span>Az
                     </span>
                  </div>
                  <div class="gt3_tools_bar__icon_tooltip">Azərbaycan</div>
                  </a>
               </div>
            
            <div class="gt3_tools_bar__icon gt3_tools_bar__icon_sale">
               <a href="locale/en">
                  <div class="gt3_tools_bar__icon_src">
                     <span>En
                     </span>
                  </div>
                  <div class="gt3_tools_bar__icon_tooltip">English</div>
               </a>
            </div>
            <div class="gt3_tools_bar__icon gt3_tools_bar__icon_support">
               <a href="locale/ru">
                  <div class="gt3_tools_bar__icon_src">
                     <span>Ru
                     </span>
                  </div>
                  <div class="gt3_tools_bar__icon_tooltip">Russian</div>
               </a>
            </div>
         </div>
     </div>
     

