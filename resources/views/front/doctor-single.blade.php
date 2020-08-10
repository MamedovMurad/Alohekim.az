<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Page Title -->
      <title>
                           @if(App::isLocale('az'))
                            {{$doctor->name_surname}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$doctor->name_surname_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->name_surname_ru}}
                            @endif       
                            | Alo Həkim
    </title>
      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Alo Həkim Bizimlə Əlaqə" />
      <meta name="keywords" content="alo hekim,elaqe" />

      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
      @include('front.widgets.doctors.doctors-style')
      @include('front.layouts.nav')

      <div class="gt3-page-title_wrapper">
         <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg' style="background-color:#fefefe;height:300px;color:#ffffff;margin-bottom:50px;background-image:url({{asset('front/')}}/wp-content/uploads/sites/62/2019/07/image30.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
            <div class='gt3-page-title__inner '>
               <div class='container'>
                  <div class='gt3-page-title__content'>
                     <div class='page_title'>
                        <h1>
                            @if(App::isLocale('az'))
                            {{$doctor->name_surname}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$doctor->name_surname_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->name_surname_ru}}
                            @endif 
                        </h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{route('homepage')}}">@lang('lang.anasehife')</a><span class="gt3_pagination_delimiter"> / </span>
                        <span class="current">
                            @if(App::isLocale('az'))
                            {{$doctor->name_surname}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$doctor->name_surname_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->name_surname_ru}}
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
            <div class="container gt3_team_single">
               <div class="row sidebar_left">
                  <div class="content-container span8">
                     <section id='main_content'>
                        <div class='gt3_single_team_header gt3_single_title'>
                           <div class="gt3_single_team_thumbnail__wrapper">
                               <img src="{{asset($doctor->image)}}">
                            </div>
                        </div>
                        <div data-elementor-type="wp-post" data-elementor-id="103" class="elementor elementor-103" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                 <section class="elementor-element elementor-element-56f1290d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="56f1290d" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-4b863ee2 elementor-column elementor-col-100 elementor-top-column" data-id="4b863ee2" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-5c993db4 elementor-widget elementor-widget-text-editor" data-id="5c993db4" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                             @if(App::isLocale('az'))
                                                             {!!$doctor->content!!}
                                                             @endif
                                                             @if(App::isLocale('en'))
                                                             {!!$doctor->content_en!!}
                                                             @endif
                                                             @if(App::isLocale('ru'))
                                                             {!!$doctor->content_ru!!}
                                                             @endif
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
                     </section>
                  </div>
                  <div class="sidebar-container span4">
                     <aside class='sidebar'>
                        <div id="gt3_team_info_widget-2" class="widget gt3_widget open widget_gt3_team_info_widget">
                           <div class="gt3-title--wrapper">
                              <h4 class="widget-title">@lang('lang.hhm')</h4>
                           </div>
                           <div class="gt3_single_team_info">
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.ad') @lang('lang.soyad'):</h4>
                                 <span>
                                 @if(App::isLocale('az'))
                            {{$doctor->name_surname}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$doctor->name_surname_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->name_surname_ru}}
                            @endif 
                                 </span>
                              </div>
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.unvan'):</h4>
                                 <span>
                                 @if(App::isLocale('az'))
                            {{$doctor->address}}
                            @endif
                            @if(App::isLocale('en'))
                            {{$doctor->address_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->address_ru}}
                            @endif 
                                 </span>
                              </div>
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.elaqenomresi'):</h4>
                                 <a href="tel:{{$doctor->phone}}" target="_blank"><span>{{$doctor->phone}}</span></a>
                              </div>
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.email'):</h4>
                                 <a href="mailto:{{$doctor->email}}" target="_blank"><span>{{$doctor->email}}</span></a>
                              </div>
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.sobesi'):</h4>
                                 <span>
                                     
                                     @if(App::isLocale('az'))
                                     {{$doctor->getSub_Category->basliq}}
                                     @endif
                            @if(App::isLocale('en'))
                            {{$doctor->getSub_Category->basliq_en}}
                            @endif
                            @if(App::isLocale('ru'))
                            {{$doctor->getSub_Category->basliq_ru}}
                            @endif </span>
                              </div>
                              <div class="gt3_single_team_info__item">
                                 <h4>@lang('lang.derecesi'):</h4>
                                 <span>
                                 @if(App::isLocale('az'))
                                 {{$doctor->degree}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$doctor->degree_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$doctor->degree_ru}}
                                 @endif
                                 </span>
                              </div>
                           </div>
                           <div class="gt3_single_team_socials">
                              <div class="gt3_single_team_socials__item"><a href="{{$doctor->facebook}}" target="_blank"><i class="fa fa-facebook-official"></i></a></div>
                             <div class="gt3_single_team_socials__item"><a href="{{$doctor->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></div>
                           </div>
                        </div>
                       
                     </aside>
                  </div>
               </div>
            </div>
         </div>
         <!-- .main_wrapper -->
      </div>
      <!-- .site_wrapper -->



      @include('front.layouts.footer')
      @include('front.widgets.doctors.doctors-script')