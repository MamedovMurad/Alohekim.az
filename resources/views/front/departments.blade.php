<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Page Title -->
      <title>
                           @if(App::isLocale('az'))
                            {{$depcategory->basliq}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$depcategory->basliq_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$depcategory->basliq_ru}}
                            @endif       
                            | Alo Həkim
    </title>
      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Alo Həkim " />
      <meta name="keywords" content="alo hekim" />

      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
      @include('front.widgets.departments.department-style')
      @include('front.layouts.nav')
     
      <div class="gt3-page-title_wrapper">
         <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg' 
         style="background-color:#fefefe;height:341px;color:#ffffff;background-image:url({{asset('front/')}}/wp-content/uploads/sites/62/2019/07/image30.jpg);
         background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
            <div class='gt3-page-title__inner '>
               <div class='container'>
                  <div class='gt3-page-title__content'>
                     <div class='page_title'>
                        <h1>
                        @if(App::isLocale('az'))
                            {{$depcategory->basliq}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$depcategory->basliq_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$depcategory->basliq_ru}}
                            @endif  
                        </h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{route('homepage')}}">@lang('lang.anasehife')</a>
                        <span class="gt3_pagination_delimiter"> / </span><span class="current">
                           @if(App::isLocale('az'))
                            {{$depcategory->basliq}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$depcategory->basliq_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$depcategory->basliq_ru}}
                            @endif
                        </span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site_wrapper fadeOnLoad">
         <div class="main_wrapper">
            <div class="container container-sidebar_none">
               <div class="row sidebar_none">
                  <div class="content-container span12">
                     <section id='main_content'>
                        <div data-elementor-type="wp-post" data-elementor-id="306" class="elementor elementor-306" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                
                                 <section class="elementor-element elementor-element-3c7dd498 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3c7dd498" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-3b1027e1 elementor-column elementor-col-100 elementor-top-column" data-id="3b1027e1" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-114a0414 elementor-widget elementor-widget-spacer" data-id="114a0414" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-2e2156a0 grid_gap-0 elementor-widget elementor-widget-gt3-core-team" data-id="2e2156a0" data-element_type="widget" data-widget_type="gt3-core-team.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="module_team type2" data-post-index="8">
                                                            <div class="shortcode_team ">
                                                               <div class="items4">
                                                                  <ul class="item_list ">
                                                                      @foreach($depart_doctors as $dd)
                                                                     <li class="item-team-member cardiac-surgeon">
                                                                        <div class="item_wrapper">
                                                                           <div class="item">
                                                                              <div class="team_img featured_img">
                                                                              <img src="{{asset($dd->image)}}" />
                                                                              </div>

                                                                              <div class="team_icons_wrapper">
                                                                                 <div class="member-icons">
                                                                                    <div class="team-icons"><a href="#" class="member-icon fa fa-facebook-official" ><span></span></a>
                                                                                       <a href="#" class="member-icon fa fa-twitter-square" >
                                                                                          <span></span></a><a href="#" class="member-icon fa fa-instagram" ><span></span></a></div>
                                                                                 </div>
                                                                              </div>
                                                                              
                                                                              <div class="team-infobox">
                                                                                 <div class="team_title">
                                                                                    <div class="team_title_wrapper">
                                                                                       <h3 class="team_title__text">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$dd->name_surname}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$dd->name_surname_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$dd->name_surname_ru}}
                                                                                        @endif
                                                                                       </h3>
                                                                                       <div class="team-positions">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$dd->getSub_Category->basliq}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$dd->getSub_Category->basliq_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$dd->getSub_Category->basliq_ru}}
                                                                                        @endif
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="team_item_hover">
                                                                                 <div class="team_title">
                                                                                    <div class="team_title_wrapper">
                                                                                       <h3 class="team_title__text">
                                                                                           <a href="{{route('doctor.single',$dd->slug)}}">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$dd->name_surname}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$dd->name_surname_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$dd->name_surname_ru}}
                                                                                        @endif   
                                                                                    </a></h3>
                                                                                       <div class="team-positions">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$dd->getSub_Category->basliq}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$dd->getSub_Category->basliq_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$dd->getSub_Category->basliq_ru}}
                                                                                        @endif
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="team_info">
                                                                                    <div class="member-short-desc">
                                                                                       <div class="gt3_team_contact">
                                                                                          <a href="tel:{{$dd->phone}}"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 21px; vertical-align: sub;">
                                                                                        </i>{{$dd->phone}}</a>
                                                                                          <a href="mailto:{{$dd->phone}}"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 15px;"></i>{{$dd->email}}</a>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="team_icons_wrapper">
                                                                                    <div class="member-icons">
                                                                                       <div class="team-icons">
                                                                                        <a href="{{$dd->facebook}}" class="member-icon fa fa-facebook-official" ><span></span></a>
                                                                                       <a href="{{$dd->instagram}}" class="member-icon fa fa-instagram" ><span></span></a></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </li>
                                                                     @endforeach
                                                                  </ul>
                                                                  <div class="clear"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--2e2156a0">{"type":"type2","pagination_en":false,"posts_per_line":4,"grid_gap":"0","query":{"post_status":["publish"],"post_type":"team","posts_per_page":"8","paged":1},"link_post":"yes","custom_item_height":"","show_social":"yes","show_position":"yes","show_title":"yes","show_description":"yes"}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-3143a622 elementor-widget elementor-widget-spacer" data-id="3143a622" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-11fb7fe0 elementor-widget elementor-widget-spacer" data-id="11fb7fe0" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="clear"></div>
                        <div id="comments"></div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <!-- .main_wrapper -->
      </div>
      <!-- .site_wrapper -->


      @include('front.layouts.footer')
      @include('front.widgets.departments.department-script')