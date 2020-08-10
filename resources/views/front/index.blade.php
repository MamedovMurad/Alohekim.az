<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      
<!-- Page Title -->
<title>Ana Səhifə | {{$nizam->title}}</title>
      <!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="{{$nizam->description}}" />
<meta name="keywords" content="{{$nizam->keywords}}" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
 
<link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<link rel="stylesheet" href="csss/anime.css">
<style>
 
   :root {
  --animate-duration: 6s;
}

</style>
@include('front.widgets.index.index-style')
@include('front.layouts.nav')
	<!--Main-->
      <div class="site_wrapper fadeOnLoad">
         <div class="main_wrapper">
            <div class="container container-sidebar_none">
               <div class="row sidebar_none">
                  <div class="content-container span12">
                     <section id='main_content'>
                        <div data-elementor-type="wp-page" data-elementor-id="207" class="elementor elementor-207" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                 <section class="elementor-element elementor-element-879d232 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="879d232" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">

                                          <!--reklam 1-->
                                          <div class="elementor-element elementor-element-7dd550f elementor-column elementor-col-50 elementor-top-column" data-id="7dd550f" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated    ">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-bda4d48 elementor-widget elementor-widget-text-editor" data-id="bda4d48" data-element_type="widget" data-widget_type="text-editor.default">
                                                     
                                                   </div>
                                                   <div class="elementor-element elementor-element-8f2fdcc elementor-widget elementor-widget-spacer " data-id="8f2fdcc" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-bd35e6f elementor-widget elementor-widget-heading  animate__animated   animate__zoomIn  animate__infinite	  animate__delay-0.5s  " data-id="bd35e6f" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">
                                                            @if(App::isLocale('az'))
                                                            {{$reklam1->text1}}
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {{$reklam1->text1_en}}
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {{$reklam1->text1_ru}}
                                                            @endif
                                                         </h2>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-4df2d29 elementor-widget elementor-widget-heading      animate__animated   animate__backInLeft animate__infinite	" data-id="4df2d29" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">
                                                         @if(App::isLocale('az'))
                                                            {{$reklam1->text2}}
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {{$reklam1->text2_en}}
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {{$reklam1->text2_ru}}
                                                            @endif
                                                         <br>
                                                         @if(App::isLocale('az'))
                                                            {{$reklam1->text3}}
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {{$reklam1->text3_en}}
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {{$reklam1->text3_ru}}
                                                            @endif
                                                         </h2>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-c94c707 elementor-widget elementor-widget-spacer" data-id="c94c707" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--reklam 2-->
                                          <div class="elementor-element elementor-element-2a4a935 elementor-column elementor-col-25 elementor-top-column" data-id="2a4a935" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-bcab26b elementor-widget elementor-widget-gt3-core-project" data-id="bcab26b" data-element_type="widget" data-widget_type="gt3-core-project.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="project_wrapper show_type_grid hover_type1 packery_type_ elementor items1 items_tablet items_mobile grid_type_square">
                                                            <div class="isotope_wrapper items_list gt3_clear">
                                                               <div class="isotope_item lazy_loading loading therapy packery_blog_item_1">
                                                                  <div class="wrapper">
                                                                     <a>
                                                                        <div class="img_wrap">
                                                                           <div class="img" >
                                                                              <div class="gt3_portfolio_list__image-placeholder gt3_lazyload__placeholder" style="padding-bottom:100%;background-color:#D3CCCE;"></div>
                                                                              <img data-src="{{asset($reklam2->image)}}"  class="gt3_lazyload" />
                                                                           </div>
                                                                        </div>
                                                                        <div class="text_wrap">
                                                                           <img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-16.png" class="project_icon" alt="icon-16">
                                                                           <h4 class="title">
                                                                           @if(App::isLocale('az'))
                                                                              {{$reklam2->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam2->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam2->text1_ru}}
                                                                           @endif
                                                                           </h4>
                                                                           <div class="categories"><span>
                                                                           @if(App::isLocale('az'))
                                                                              {{$reklam2->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam2->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam2->text2_ru}}
                                                                           @endif
                                                                           </span></div>
                                                                        </div>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--bcab26b">{"pagination_en":false,"show_title":true,"show_category":true,"show_description":false,"use_filter":false,"load_items":"4","gap_value":0,"gap_unit":"px","query":{"post_status":["publish"],"post_type":"project","posts_per_page":"4","post__in":["180"],"paged":1,"exclude":[180]},"type":"grid","random":false,"render_index":"1","settings":{"grid_type":"square","cols":"1","cols_tablet":"","cols_mobile":"","show_type":"grid","packery_type":""},"cols":"1","cols_tablet":"","cols_mobile":"","grid_type":"square"}</script>		
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--reklam 3-->
                                          <div class="elementor-element elementor-element-efd672f elementor-column elementor-col-25 elementor-top-column" data-id="efd672f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-bc3eb9d elementor-widget elementor-widget-heading" data-id="bc3eb9d" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h3 class="elementor-heading-title elementor-size-default">
                                                         @if(App::isLocale('az'))
                                                                              {{$reklam3->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam3->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam3->text1_ru}}
                                                                           @endif
                                                         </h3>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-6bfbc07 elementor-widget elementor-widget-text-editor" data-id="6bfbc07" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-69cad97 elementor-widget elementor-widget-spacer" data-id="69cad97" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-9cc3e93 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="9cc3e93" data-element_type="widget" data-widget_type="icon-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                               <span class="elementor-icon elementor-animation-" >
                                                               <i class="fa fa-envelope" aria-hidden="true"></i>				</span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                               <p class="elementor-icon-box-title">
                                                               <span >   @if(App::isLocale('az'))
                                                                              {{$reklam3->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam3->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam3->text2_ru}}
                                                                           @endif</span>
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-56eab54 elementor-widget elementor-widget-spacer" data-id="56eab54" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-0813bf8 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0813bf8" data-element_type="widget" data-widget_type="icon-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                               <span class="elementor-icon elementor-animation-" >
                                                               <i class="fa fa-map-marker" aria-hidden="true"></i>				</span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                               <p class="elementor-icon-box-title">
                                                               <span >   @if(App::isLocale('az'))
                                                                              {{$reklam3->text3}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam3->text3_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam3->text3_ru}}
                                                                           @endif</span>
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-element elementor-element-34a4f537 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="34a4f537" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-2276caa9 elementor-column elementor-col-100 elementor-top-column" data-id="2276caa9" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <section class="elementor-element elementor-element-6abb47cf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="6abb47cf" data-element_type="section">
                                                      <div class="elementor-container elementor-column-gap-no">
                                                         <div class="elementor-row">
                                                            <!--reklam 4-->
                                                            <div class="elementor-element elementor-element-5d0ab99f elementor-column elementor-col-25 elementor-inner-column" data-id="5d0ab99f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element elementor-element-231897a3 elementor-widget elementor-widget-heading" data-id="231897a3" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                           <h3 class="elementor-heading-title elementor-size-default">
                                                                           <span >   @if(App::isLocale('az'))
                                                                              {{$reklam4->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam4->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam4->text1_ru}}
                                                                           @endif</span>
                                                                           </h3>
                                                                        </div>
                                                                     </div>
                                                                     <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-6ccba064 elementor-widget elementor-widget-text-editor" data-id="6ccba064" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="elementor-text-editor elementor-clearfix">
                                                                              <p>@if(App::isLocale('az'))
                                                                              {{$reklam4->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam4->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam4->text2_ru}}
                                                                           @endif</p>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="elementor-element elementor-element-35c58533 elementor-shape-circle elementor-widget elementor-widget-social-icons" data-id="35c58533" data-element_type="widget" data-widget_type="social-icons.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="elementor-social-icons-wrapper">
                                                                             
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="elementor-element elementor-element-572b41fc elementor-widget elementor-widget-heading" data-id="572b41fc" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                           <h4 class="elementor-heading-title elementor-size-default">
                                                                           @if(App::isLocale('az'))
                                                                              {{$reklam4->text3}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam4->text3_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam4->text3_ru}}
                                                                           @endif
                                                                           </h4>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!--reklam 5-->
                                                            <div class="elementor-element elementor-element-38d812d elementor-column elementor-col-25 elementor-inner-column" data-id="38d812d" data-element_type="column">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element elementor-element-7a28fd2 elementor-widget elementor-widget-gt3-core-project" data-id="7a28fd2" data-element_type="widget" data-widget_type="gt3-core-project.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="project_wrapper show_type_grid hover_type1 packery_type_ elementor items1 items_tablet items_mobile grid_type_square">
                                                                              <div class="isotope_wrapper items_list gt3_clear">
                                                                                 <div class="isotope_item lazy_loading loading therapy packery_blog_item_1">
                                                                                    <div class="wrapper">
                                                                                       <a>
                                                                                          <div class="img_wrap">
                                                                                             <div class="img" >
                                                                                                <div class="gt3_portfolio_list__image-placeholder gt3_lazyload__placeholder" style="padding-bottom:100%;background-color:#D5C9CF;"></div>
                                                                                                <img data-src="{{asset($reklam5->image)}}" class="gt3_lazyload" />
                                                                                             </div>
                                                                                          </div>
                                                                                          <div class="text_wrap">
                                                                                            <h4 class="title">
                                                                                            @if(App::isLocale('az'))
                                                                              {{$reklam5->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam5->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam5->text1_ru}}
                                                                           @endif
                                                                                            </h4>
                                                                                             <div class="categories"><span>
                                                                                                @if(App::isLocale('az'))
                                                                              {{$reklam5->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam5->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam5->text2_ru}}
                                                                           @endif</span></div>
                                                                                          </div>
                                                                                       </a>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                           <script type="application/json" id="settings--7a28fd2">{"pagination_en":false,"show_title":true,"show_category":true,"show_description":false,"use_filter":false,"load_items":"4","gap_value":0,"gap_unit":"px","query":{"post_status":["publish"],"post_type":"project","posts_per_page":"4","post__in":["170"],"paged":1,"exclude":[170]},"type":"grid","random":false,"render_index":"1","settings":{"grid_type":"square","cols":"1","cols_tablet":"","cols_mobile":"","show_type":"grid","packery_type":""},"cols":"1","cols_tablet":"","cols_mobile":"","grid_type":"square"}</script>		
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!--reklam 6-->
                                                            <div class="elementor-element elementor-element-38d812d elementor-column elementor-col-25 elementor-inner-column" data-id="38d812d" data-element_type="column">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element elementor-element-7a28fd2 elementor-widget elementor-widget-gt3-core-project" data-id="7a28fd2" data-element_type="widget" data-widget_type="gt3-core-project.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="project_wrapper show_type_grid hover_type1 packery_type_ elementor items1 items_tablet items_mobile grid_type_square">
                                                                              <div class="isotope_wrapper items_list gt3_clear">
                                                                                 <div class="isotope_item lazy_loading loading therapy packery_blog_item_1">
                                                                                    <div class="wrapper">
                                                                                       <a>
                                                                                          <div class="img_wrap">
                                                                                             <div class="img" >
                                                                                                <div class="gt3_portfolio_list__image-placeholder gt3_lazyload__placeholder" style="padding-bottom:100%;background-color:#D5C9CF;"></div>
                                                                                                <img data-src="{{asset($reklam6->image)}}" class="gt3_lazyload" />
                                                                                             </div>
                                                                                          </div>
                                                                                          <div class="text_wrap">
                                                                                            <h4 class="title">
                                                                                            @if(App::isLocale('az'))
                                                                              {{$reklam6->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam6->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam6->text1_ru}}
                                                                           @endif
                                                                                            </h4>
                                                                                             <div class="categories"><span>
                                                                                                @if(App::isLocale('az'))
                                                                              {{$reklam6->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam6->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam6->text2_ru}}
                                                                           @endif</span></div>
                                                                                          </div>
                                                                                       </a>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                           <script type="application/json" id="settings--7a28fd2">{"pagination_en":false,"show_title":true,"show_category":true,"show_description":false,"use_filter":false,"load_items":"4","gap_value":0,"gap_unit":"px","query":{"post_status":["publish"],"post_type":"project","posts_per_page":"4","post__in":["170"],"paged":1,"exclude":[170]},"type":"grid","random":false,"render_index":"1","settings":{"grid_type":"square","cols":"1","cols_tablet":"","cols_mobile":"","show_type":"grid","packery_type":""},"cols":"1","cols_tablet":"","cols_mobile":"","grid_type":"square"}</script>		
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!--reklam 7-->
                                                            <div class="elementor-element elementor-element-38d812d elementor-column elementor-col-25 elementor-inner-column" data-id="38d812d" data-element_type="column">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element elementor-element-7a28fd2 elementor-widget elementor-widget-gt3-core-project" data-id="7a28fd2" data-element_type="widget" data-widget_type="gt3-core-project.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="project_wrapper show_type_grid hover_type1 packery_type_ elementor items1 items_tablet items_mobile grid_type_square">
                                                                              <div class="isotope_wrapper items_list gt3_clear">
                                                                                 <div class="isotope_item lazy_loading loading therapy packery_blog_item_1">
                                                                                    <div class="wrapper">
                                                                                       <a>
                                                                                          <div class="img_wrap">
                                                                                             <div class="img" >
                                                                                                <div class="gt3_portfolio_list__image-placeholder gt3_lazyload__placeholder" style="padding-bottom:100%;background-color:#D5C9CF;"></div>
                                                                                                <img data-src="{{asset($reklam7->image)}}" class="gt3_lazyload" />
                                                                                             </div>
                                                                                          </div>
                                                                                          <div class="text_wrap">
                                                                                            <h4 class="title">
                                                                                            @if(App::isLocale('az'))
                                                                              {{$reklam7->text1}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam7->text1_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam7->text1_ru}}
                                                                           @endif
                                                                                            </h4>
                                                                                             <div class="categories"><span>
                                                                                                @if(App::isLocale('az'))
                                                                              {{$reklam7->text2}}
                                                                           @endif
                                                                           @if(App::isLocale('en'))
                                                                              {{$reklam7->text2_en}}
                                                                           @endif
                                                                           @if(App::isLocale('ru'))
                                                                              {{$reklam7->text2_ru}}
                                                                           @endif</span></div>
                                                                                          </div>
                                                                                       </a>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                           <script type="application/json" id="settings--7a28fd2">{"pagination_en":false,"show_title":true,"show_category":true,"show_description":false,"use_filter":false,"load_items":"4","gap_value":0,"gap_unit":"px","query":{"post_status":["publish"],"post_type":"project","posts_per_page":"4","post__in":["170"],"paged":1,"exclude":[170]},"type":"grid","random":false,"render_index":"1","settings":{"grid_type":"square","cols":"1","cols_tablet":"","cols_mobile":"","show_type":"grid","packery_type":""},"cols":"1","cols_tablet":"","cols_mobile":"","grid_type":"square"}</script>		
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
                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-element elementor-element-50b1c500 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="50b1c500" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-65f6ced9 elementor-column elementor-col-25 elementor-top-column" data-id="65f6ced9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-a53a81d elementor-widget elementor-widget-spacer" data-id="a53a81d" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_color elementor-element elementor-element-1370a383 elementor-widget elementor-widget-text-editor" data-id="1370a383" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h3><span class="gt3_title_line left"><span></span></span>@lang('lang.sobeler')</h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-167e172 elementor-widget elementor-widget-text-editor" data-id="167e172" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <ul>
                                                               @foreach($dcategory as $d)
                                                               <li><span style="color: #ffffff"><a href="{{route('department',$d->slug)}}" style="color: #ffffff">
                                                               @if(App::isLocale('az'))
                                 {{$d->basliq}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$d->basliq_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$d->basliq_ru}}
                                 @endif
                                                            </a></span></li>
                                                               @endforeach
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-0411700 elementor-widget elementor-widget-spacer" data-id="0411700" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-266a83e elementor-widget elementor-widget-spacer" data-id="266a83e" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-558f4169 elementor-column elementor-col-25 elementor-top-column" data-id="558f4169" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-5919922a elementor-widget elementor-widget-spacer" data-id="5919922a" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-d6ce54 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="d6ce54" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-1-oak4n4fo7bsd63s6wii5sqiou9yewj9asakfzpobf0.png" title="icon-1" alt="icon-1" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.1')</h3>
                                                             </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-6c60cd04 elementor-widget elementor-widget-spacer" data-id="6c60cd04" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-16ea7d22 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="16ea7d22" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-4-oak4n4foau38gm8y3xvnonk5oyf0alr9g5p14dzp7m.png" title="icon-4" alt="icon-4" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.2')</h3>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-54a4db53 elementor-widget elementor-widget-spacer" data-id="54a4db53" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-1698c837 elementor-column elementor-col-25 elementor-top-column" data-id="1698c837" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-2d739bb2 elementor-widget elementor-widget-spacer" data-id="2d739bb2" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-1d528975 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="1d528975" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-2-oak4n4fo8n5fwjph3srq07eqns4mxb71a8qnwysl5a.png" title="icon-2" alt="icon-2" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.3')</h3>
                                                             </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-7c4d4cce elementor-widget elementor-widget-spacer" data-id="7c4d4cce" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-98831c3 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="98831c3" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-5-oak4n4fodgtdxi3iiies3lc9byrgc5mqg21gyw88dm.png" title="icon-5" alt="icon-5" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.4')</h3>
                                                             </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-936138a elementor-widget elementor-widget-spacer" data-id="936138a" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-61b5ec7a elementor-column elementor-col-25 elementor-top-column" data-id="61b5ec7a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-2b7625c0 elementor-widget elementor-widget-spacer" data-id="2b7625c0" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5ba7ef6f elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="5ba7ef6f" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-3-oak4n4foece3r4ppbd95kklmjmvloo9840tm92b2uo.png" title="icon-3" alt="icon-3" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.5')</h3>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-30db51b9 elementor-widget elementor-widget-spacer" data-id="30db51b9" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-749d2cbe elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="749d2cbe" data-element_type="widget" data-widget_type="image-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-6-oak4n4foes6gny0spsocb28b5gxocxkgy07ow5chz6.png" title="icon-6" alt="icon-6" /></figure>
                                                            <div class="elementor-image-box-content">
                                                               <h3 class="elementor-image-box-title">@lang('lang.6')</h3>
                                                             </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-652a1bf3 elementor-widget elementor-widget-spacer" data-id="652a1bf3" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-5882c6b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5882c6b7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-30649d13 elementor-column elementor-col-50 elementor-top-column" data-id="30649d13" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-1bb7f46b elementor-widget elementor-widget-spacer" data-id="1bb7f46b" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5c5848e0 elementor-widget elementor-widget-image" data-id="5c5848e0" data-element_type="widget" data-widget_type="image.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image">
                                                            <img src="{{asset($nizam->logo)}}"  />											
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-2beecb21 elementor-widget elementor-widget-heading" data-id="2beecb21" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">
                                                            @if(App::isLocale('az'))
                                                            {{$about->Basliq}}</h2>
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {{$about->Basliq_en}}</h2>
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {{$about->Basliq_ru}}</h2>
                                                            @endif
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-45344740 elementor-widget elementor-widget-text-editor" data-id="45344740" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <p> @if(App::isLocale('az'))
                                                            {!!Str::limit($about->mezmun,300)!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {!!Str::limit($about->mezmun_en,300)!!}!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {!!Str::limit($about->mezmun_ru,300)!!}!!}</h2>
                                                            @endif</p></div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-36fe0ffe elementor-widget elementor-widget-spacer" data-id="36fe0ffe" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="gt3-core-button--alignment_left elementor-element elementor-element-275c444b elementor-widget elementor-widget-gt3-core-button" data-id="275c444b" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_button_elementor size_normal alignment_left button_icon_none hover_none ">
                                                            <a class="button_size_elementor_normal alignment_left border_icon_none hover_none btn_icon_position_left" a href="{{route('about')}}">
                                                            <span class="gt3_module_button__container">
                                                            <span class="gt3_module_button__cover front"><span class="elementor_gt3_btn_text">@lang('lang.dahaetrafli')</span></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                         <script type="application/json" id="settings--275c444b">[]</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-13e29f24 elementor-widget elementor-widget-spacer" data-id="13e29f24" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-5e75e599 elementor-column elementor-col-50 elementor-top-column" data-id="5e75e599" data-element_type="column">
                                             <div class="elementor-column-wrap">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-element elementor-element-7dbe22f1 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7dbe22f1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-54f6159 elementor-column elementor-col-50 elementor-top-column" data-id="54f6159" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-373902ce elementor-widget elementor-widget-text-editor" data-id="373902ce" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h3><span class="gt3_title_line left"><span></span></span>@lang('lang.saglamliq')</h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-ae26ce2 arrow_position-top elementor-widget elementor-widget-gt3-core-blog-simple" data-id="ae26ce2" data-element_type="widget" data-widget_type="gt3-core-blog-simple.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_blog_simple gt3_carousel-elementor">
                                                            <div class="gt3_blog_simple_item">
                                                            @foreach($xeberler as $x)
                                                               <div class="blog_post_preview ">
                                                               
                                                            <div class="gt3_blog_simple_item">
                                                               <div class="blog_post_preview ">
                                                                  <div class="item_wrapper">
                                                                     <div class="blog_content">
                                                                        <div class="gt3_blogsimple_header">
                                                                           <div class="listing_meta"><span class="post_date"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                           {{$x->created_at}}</a></span></div>
                                                                        </div>
                                                                        <h3 class="blogpost_title"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                        @if(App::isLocale('az'))
                                                                        {{$x->title}}
                                                                        @endif
                                                                        @if(App::isLocale('en'))
                                                                        {{$x->title_en}}
                                                                        @endif
                                                                        @if(App::isLocale('ru'))
                                                                        {{$x->title_ru}}
                                                                        @endif
                                                                     </a></h3>
                                                                        <div class="blog_item_description">
                                                                        @if(App::isLocale('az'))
                                                            {!!Str::limit($x->content,100)!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {!!Str::limit($x->content_en,100)!!}!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {!!Str::limit($x->content_ru,100)!!}!!}</h2>
                                                            @endif
                                                                           <div class="gt3_module_button_list"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">@lang('lang.dahaetrafli')</a></div>
                                                                           <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            
                                                               </div>
                                                               @endforeach
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--ae26ce2">{"fade":false,"autoplay":false,"items_per_line":1,"autoplaySpeed":4000,"dots":false,"arrows":true,"centerMode":false,"posts_per_column":3,"l10n":{"prev":"Prev","next":"Next"}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-f227998 elementor-widget elementor-widget-spacer" data-id="f227998" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-48e8e7fb elementor-column elementor-col-50 elementor-top-column" data-id="48e8e7fb" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-3b29b2c elementor-align-left elementor-widget elementor-widget-gt3-core-divider" data-id="3b29b2c" data-element_type="widget" data-widget_type="gt3-core-divider.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_divider_wrapper-elementor ">
                                                            <h6>@lang('lang.qeydiyyatdankecin')</h6>
                                                            <span class="gt3_divider_line gt3_divider_line--right"><span></span></span>	
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-3364f1ba elementor-widget elementor-widget-heading" data-id="3364f1ba" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">@lang('lang.qeydiyyatdankec')</h2>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-40ec4332 elementor-widget elementor-widget-shortcode" data-id="40ec4332" data-element_type="widget" data-widget_type="shortcode.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-shortcode">
                                                         @if(session('success'))
                                                         <div class="alert alert-info">
                 {{session('success')}}
            </div>
            @endif
            @if($errors->any())
              <div class="alert alert-danger">
                 <ul>
                      @foreach($errors->all() as $error)
                             <li>{{$error}}</li>
                      @endforeach
                </ul>
              </div>
             @endif
                                                               <form action="{{route('qeydiyyat.post')}}" method="POST" class="wpcf7-form init">
                                                                  @csrf
                                                                  <div style="color: #ffffff">

                                                                  <div class="name-wrapper"><label><span class="label">@lang('lang.ad')</span>
                                                                     <span class="wpcf7-form-control-wrap your-name">
                                                                     <input type="text" name="ad" value="" size="40" required
                                                                     class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required gt3-special-field" 
                                                                     aria-required="true" aria-invalid="false" /></span></label>
                                                                  </div>

                                                                  <div class="name-wrapper"><label><span class="label">@lang('lang.soyad')</span>
                                                                     <span class="wpcf7-form-control-wrap your-name">
                                                                     <input type="text" name="soyad" value="" size="40"  required
                                                                     class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required gt3-special-field" 
                                                                     aria-required="true" aria-invalid="false" /></span></label>
                                                                  </div>

                                                                  <div class="email-wrapper"><label><span class="label">@lang('lang.email')</span>
                                                                     <span class="wpcf7-form-control-wrap your-email">
                                                                     <input type="email" name="email" value="" size="40" required
                                                                     class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email gt3-special-field" 
                                                                     aria-required="true" aria-invalid="false" /></span></label>
                                                                  </div>

                                                                  <div class="tel-wrapper"><label><span class="label">@lang('lang.elaqenomresi')</span>
                                                                     <span class="wpcf7-form-control-wrap your-tel">
                                                                     <input type="tel" name="tel" value="" size="40" required class="wpcf7-form-control wpcf7-text wpcf7-tel 
                                                                     wpcf7-validates-as-required wpcf7-validates-as-tel gt3-special-field" aria-required="true"
                                                                      aria-invalid="false" /></span></label>
                                                                  </div>

                                                                  <div class="tel-wrapper"><label><span class="label">@lang('lang.vezife')</span>
                                                                     <span class="wpcf7-form-control-wrap your-tel">
                                                                     <input type="text" name="vezife" value="" size="40" required class="wpcf7-form-control wpcf7-text wpcf7-tel 
                                                                     wpcf7-validates-as-required wpcf7-validates-as-tel gt3-special-field" aria-required="true"
                                                                      aria-invalid="false" /></span></label>
                                                                  </div>

                                                                  <div class="message-wrapper"><label><span class="label">@lang('lang.xusuiqeyd')</span>
                                                                  <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="4" 
                                                                  class="wpcf7-form-control wpcf7-textarea gt3-special-field" aria-invalid="false"></textarea></span></label>
                                                                  </div>
                                                                  
                                                                     <p><input type="submit" value="@lang('lang.gonder')" class="wpcf7-form-control wpcf7-submit gt3-special-field" /></p>
                                                                  </div>
                                                               </form>
                                                        
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-79659c05 elementor-widget elementor-widget-spacer" data-id="79659c05" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <div>
                                 <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5fc715e2-6443-40e2-b88f-a4f426701b35"></div>
                                 </div>
                                 <section class="elementor-element elementor-element-b19d7bc elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b19d7bc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-9fc97e5 elementor-column elementor-col-100 elementor-top-column" data-id="9fc97e5" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-e780f19 elementor-widget elementor-widget-text-editor" data-id="e780f19" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h3><span class="gt3_title_line left"><span></span></span>@lang('lang.saglamliq')</h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-54deb5d arrow_position-top elementor-widget elementor-widget-gt3-core-blog-simple" data-id="54deb5d" data-element_type="widget" data-widget_type="gt3-core-blog-simple.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_blog_simple gt3_carousel-elementor">
                                                            <div class="gt3_blog_simple_item">

                                                            @foreach($xeberler as $x)
                                                               <div class="blog_post_preview ">
                                                                  <div class="item_wrapper">
                                                                     <div class="blog_content">
                                                                        <div class="gt3_blogsimple_header">
                                                                           <div class="listing_meta"><span class="post_date"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                           {{$x->created_at}}</a></span></div>
                                                                        </div>
                                                                        <h3 class="blogpost_title"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                        @if(App::isLocale('az'))
                                                                        {{$x->title}}
                                                                        @endif
                                                                        @if(App::isLocale('en'))
                                                                        {{$x->title_en}}
                                                                        @endif
                                                                        @if(App::isLocale('ru'))
                                                                        {{$x->title_ru}}
                                                                        @endif
                                                                     </a></h3>
                                                                        <div class="blog_item_description">
                                                                        @if(App::isLocale('az'))
                                                            {!!Str::limit($x->content,100)!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {!!Str::limit($x->content_en,100)!!}!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {!!Str::limit($x->content_ru,100)!!}!!}</h2>
                                                            @endif
                                                                           <div class="gt3_module_button_list"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">@lang('lang.dahaetrafli')</a></div>
                                                                           <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>

                                                             @endforeach
                                                            </div>

                                                            <div class="gt3_blog_simple_item">
                                                            @foreach($xeberler as $x)
                                                               <div class="blog_post_preview ">
                                                                  <div class="item_wrapper">
                                                                     <div class="blog_content">
                                                                        <div class="gt3_blogsimple_header">
                                                                           <div class="listing_meta"><span class="post_date">
                                                                           <a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                           {{$x->created_at}}</a></span></div>
                                                                        </div>
                                                                        <h3 class="blogpost_title"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">
                                                                        @if(App::isLocale('az'))
                                                                        {{$x->title}}
                                                                        @endif
                                                                        @if(App::isLocale('en'))
                                                                        {{$x->title_en}}
                                                                        @endif
                                                                        @if(App::isLocale('ru'))
                                                                        {{$x->title_ru}}
                                                                        @endif
                                                                     </a></h3>
                                                                        <div class="blog_item_description">
                                                                        @if(App::isLocale('az'))
                                                            {!!Str::limit($x->content,100)!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                            {!!Str::limit($x->content_en,100)!!}!!}</h2>
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                            {!!Str::limit($x->content_ru,100)!!}!!}</h2>
                                                            @endif
                                                                           <div class="gt3_module_button_list"><a href="{{route('news.single',[$x->getSub_Category->slug,$x->slug])}}">@lang('lang.dahaetrafli')</a></div>
                                                                           <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>

                                                               @endforeach
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--54deb5d">{"fade":false,"autoplay":false,"items_per_line":1,"autoplaySpeed":4000,"dots":false,"arrows":true,"centerMode":false,"posts_per_column":3,"l10n":{"prev":"Prev","next":"Next"}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-00caa45 elementor-widget elementor-widget-spacer" data-id="00caa45" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-301cacd elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="301cacd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-8431ea0 elementor-column elementor-col-100 elementor-top-column" data-id="8431ea0" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-6bfe1c2 elementor-align-left elementor-widget elementor-widget-gt3-core-divider" data-id="6bfe1c2" data-element_type="widget" data-widget_type="gt3-core-divider.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_divider_wrapper-elementor ">
                                                            <h6>MAKE AN</h6>
                                                            <span class="gt3_divider_line gt3_divider_line--right"><span></span></span>	
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-bab0faa elementor-widget elementor-widget-heading" data-id="bab0faa" data-element_type="widget" data-widget_type="heading.default">
                                                      <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">APPOINTMENT</h2>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-e4b5e66 elementor-widget elementor-widget-shortcode" data-id="e4b5e66" data-element_type="widget" data-widget_type="shortcode.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-shortcode">
                                                            <div role="form" class="wpcf7" id="wpcf7-f6-p207-o2" lang="en-US" dir="ltr">
                                                               <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                                               <form action="https://livewp.site/wp/md/sirona/homepage/#wpcf7-f6-p207-o2" method="post" class="wpcf7-form init" novalidate="novalidate">
                                                                  <div style="display: none;">
                                                                     <input type="hidden" name="_wpcf7" value="6" />
                                                                     <input type="hidden" name="_wpcf7_version" value="5.2" />
                                                                     <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                     <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p207-o2" />
                                                                     <input type="hidden" name="_wpcf7_container_post" value="207" />
                                                                     <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                  </div>
                                                                  <div style="color: #ffffff">
                                                                     <div class="name-wrapper"><label><span class="label">Name</span><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required gt3-special-field" aria-required="true" aria-invalid="false" /></span></label></div>
                                                                     <div class="email-wrapper"><label><span class="label">Email Address</span><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email gt3-special-field" aria-required="true" aria-invalid="false" /></span></label></div>
                                                                     <div class="tel-wrapper"><label><span class="label">Phone Number</span><span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel gt3-special-field" aria-required="true" aria-invalid="false" /></span></label></div>
                                                                     <div class="date-wrapper"><span class="wpcf7-form-control-wrap your-date"><input type="date" name="your-date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date gt3-special-field" aria-invalid="false" /></span></label></div>
                                                                     <div class="message-wrapper"><label><span class="label">Message</span><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea gt3-special-field" aria-invalid="false"></textarea></span></label></div>
                                                                     <p><input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit gt3-special-field" /></p>
                                                                  </div>
                                                                  <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-1dede28 elementor-widget elementor-widget-spacer" data-id="1dede28" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-55d0ad3d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="55d0ad3d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-5358933d elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-50 elementor-top-column" data-id="5358933d" data-element_type="column">
                                             <div class="elementor-column-wrap">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-7a5f1779 elementor-column elementor-col-50 elementor-top-column" data-id="7a5f1779" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-3f9129e elementor-widget elementor-widget-spacer" data-id="3f9129e" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-bca4b5b elementor-align-left elementor-widget elementor-widget-gt3-core-divider" data-id="bca4b5b" data-element_type="widget" data-widget_type="gt3-core-divider.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_divider_wrapper-elementor ">
                                                            <h6><h6>@lang('lang.profosionalxidmet')</h6></h6>
                                                            <span class="gt3_divider_line gt3_divider_line--right"><span></span></span>	
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_font_size elementor-element-custom_font_size_mobile elementor-element-custom_line_height elementor-element elementor-element-581753c5 elementor-widget elementor-widget-text-editor" data-id="581753c5" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h2>@lang('lang.herzamanheryerde')</h2>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-4f46f44 elementor-widget elementor-widget-spacer" data-id="4f46f44" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="gt3-core-button--alignment_inline elementor-element elementor-element-40b8d853 elementor-widget elementor-widget-gt3-core-button" data-id="40b8d853" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_button_elementor size_custom alignment_inline button_icon_image hover_none ">
                                                            <a class="button_size_elementor_custom alignment_inline border_icon_image hover_none btn_icon_position_left" href="#">
                                                            <span class="gt3_module_button__container">
                                                            <span class="gt3_module_button__cover front"><span class="elementor_btn_icon_container"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-24-402x120.png" alt="" style="width:201px;" /></span></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                         <script type="application/json" id="settings--40b8d853">[]</script>		
                                                      </div>
                                                   </div>
                                                   <div class="gt3-core-button--alignment_inline elementor-element elementor-element-307ad554 elementor-widget elementor-widget-gt3-core-button" data-id="307ad554" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_button_elementor size_custom alignment_inline button_icon_image hover_none ">
                                                            <a class="button_size_elementor_custom alignment_inline border_icon_image hover_none btn_icon_position_left" href="#">
                                                            <span class="gt3_module_button__container">
                                                            <span class="gt3_module_button__cover front"><span class="elementor_btn_icon_container"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-25-402x120.png" alt="" style="width:201px;" /></span></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                         <script type="application/json" id="settings--307ad554">[]</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-152d6ee elementor-widget elementor-widget-spacer" data-id="152d6ee" data-element_type="widget" data-widget_type="spacer.default">
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


                                 <section class="elementor-element elementor-element-de780b5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="de780b5" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-e4afc3e elementor-column elementor-col-100 elementor-top-column" data-id="e4afc3e" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-7db3c01 text_align-left elementor-widget elementor-widget-gt3-core-portfoliocarousel" data-id="7db3c01" data-element_type="widget" data-widget_type="gt3-core-portfoliocarousel.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="portfolio_carousel_wrapper portfolio_items_per_line_3  elementor text_align-left">
                                                            <div class="items_list gt3_clear space_0">

                                                            @foreach($clinics as $c)
                                                               <div class="portfolio_item psychiatrics packery_blog_item_1">
                                                                  <div class="wrapper">
                                                                     <a href="case/primary-preventive-care/index.html" class="lightbox" title="Primary &#038; Preventive Care"></a>
                                                                     <div class="img_wrap">
                                                                        <div class="img" >
                                                                           <img src="{{asset($c->image)}}" style="height:330px"
                                                                         
                                                                                sizes="(min-width: 2000px) 1200px, (min-width: 1920px) 670px, (min-width: 1620px) 640px, (min-width: 1200px) 540px,
                                                                                 (min-width: 992px) 400px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px)
                                                                                  420px" title="Primary-&#038;-Preventive-Care" alt="" /></div>
                                                                     </div>
                                                                     <div class="text_wrap">
                                                                        <h4 class="title"><a href="case/primary-preventive-care/index.html" title="Primary &#038; Preventive Care">
                                                                        @if(App::isLocale('az'))
                                                                        {{$c->title}}
                                                                        @endif
                                                                        @if(App::isLocale('en'))
                                                                        {{$c->title_en}}
                                                                        @endif
                                                                        @if(App::isLocale('ru'))
                                                                        {{$c->title_ru}}
                                                                        @endif
                                                                     </a></h4>
                                                                        <div class="categories"><span>
                                                                      
                                                                        </span></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            @endforeach
                                                            
                                                            
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--7db3c01">{"autoplay":false,"autoplaySpeed":4000,"centerMode":false,"fade":false,"items_per_line":3,"dots":false,"arrows":true,"l10n":{"prev":"Prev","next":"Next"},"show_title":true,"show_category":true,"show_text":false,"query":{"post_status":["publish"],"post_type":"portfolio","posts_per_page":"4","exclude":[938,942,947,852]},"random":false,"render_index":"4"}</script>		
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-element elementor-element-3484ed7 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3484ed7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-a30155e elementor-column elementor-col-50 elementor-top-column" data-id="a30155e" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-28fe8b7 elementor-widget elementor-widget-spacer" data-id="28fe8b7" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_color elementor-element elementor-element-08c31f0 elementor-widget elementor-widget-text-editor" data-id="08c31f0" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h3><span class="gt3_title_line left"><span></span></span>@lang('lang.hekimler')</h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-2cf4faf elementor-column elementor-col-50 elementor-top-column" data-id="2cf4faf" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="gt3-core-button--alignment_right elementor-element elementor-element-dc056f5 elementor-widget elementor-widget-gt3-core-button" data-id="dc056f5" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_button_elementor size_normal alignment_right button_icon_none hover_none ">
                                                            <a class="button_size_elementor_normal alignment_right border_icon_none hover_none btn_icon_position_left" href="#">
                                                            <span class="gt3_module_button__container">
                                                            <span class="gt3_module_button__cover front"><span class="elementor_gt3_btn_text">@lang('lang.qeydiyyatdankec')</span></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                         <script type="application/json" id="settings--dc056f5">[]</script>		
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-element elementor-element-64b9293a elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="64b9293a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-73fc7f7f elementor-column elementor-col-100 elementor-top-column" data-id="73fc7f7f" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-392370c8 elementor-widget elementor-widget-spacer" data-id="392370c8" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-a73d4f4 dots_position-outside grid_gap-0 elementor-widget elementor-widget-gt3-core-teamcarousel" data-id="a73d4f4" data-element_type="widget" data-widget_type="gt3-core-teamcarousel.default">
                                                      <div class="elementor-widget-container">
                                                         <div class=" team_show_social module_team type2" data-settings="{&quot;fade&quot;:false,&quot;autoplay&quot;:false,&quot;items_per_line&quot;:4,&quot;autoplaySpeed&quot;:4000,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;centerMode&quot;:false,&quot;l10n&quot;:{&quot;prev&quot;:&quot;Prev&quot;,&quot;next&quot;:&quot;Next&quot;}}">
                                                            <div class="shortcode_team ">
                                                               <div class="items4">
                                                                  <ul class="item_list gt3_clear">
                                                                     @foreach($depart_doctors as $d)
                                                                     <li class="item-team-member cardiac-surgeon">
                                                                        <div class="item_wrapper">
                                                                           <div class="item">
                                                                              <div class="team_img featured_img">
                                                                                 <a href="team/dr-charlie-mccormick/index.html">
                                                                                 <img src="{{asset($d->image)}}" title="image23" alt="image23" /></a></div>
                                                                              <div class="team-infobox">
                                                                                 <div class="team_title">
                                                                                    <div class="team_title_wrapper">
                                                                                       <h3 class="team_title__text"><a>
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$d->name_surname}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$d->name_surname_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$d->name_surname_ru}}
                                                                                        @endif</a></h3>
                                                                                       <div class="team-positions">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$d->getSub_Category->basliq}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$d->getSub_Category->basliq_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$d->getSub_Category->basliq_ru}}
                                                                                        @endif
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="team_item_hover">
                                                                                 <div class="team_title">
                                                                                    <div class="team_title_wrapper">
                                                                                       <h3 class="team_title__text"> <a href="{{route('doctor.single',$d->slug)}}">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$d->name_surname}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$d->name_surname_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$d->name_surname_ru}}
                                                                                        @endif</a></h3>
                                                                                       <div class="team-positions">
                                                                                       @if(App::isLocale('az'))
                                                                                          {{$d->getSub_Category->basliq}}
                                                                                        @endif
                                                                                        @if(App::isLocale('en'))
                                                                                           {{$d->getSub_Category->basliq_en}}
                                                                                        @endif
                                                                                        @if(App::isLocale('ru'))
                                                                                           {{$d->getSub_Category->basliq_ru}}
                                                                                        @endif</div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="team_info">
                                                                                    <div class="member-short-desc">
                                                                                      
                                                                                       <div class="gt3_team_contact">
                                                                                          <a href="#"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 21px; vertical-align: sub;"></i>
                                                                                          {{$d->phone}}</a>
                                                                                          <a href="#"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 15px;"></i>{{$d->email}}</a>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="team_icons_wrapper">
                                                                                    <div class="member-icons">
                                                                                       <div class="team-icons">
                                                                                          <a href="{{$d->facebook}}" class="member-icon fa fa-facebook-official" ><span></span></a>
                                                                                       <a href="{{$d->instagram}}" class="member-icon fa fa-instagram" ><span></span></a></div>
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
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-1dcb69fe elementor-widget elementor-widget-spacer" data-id="1dcb69fe" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-57335067 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="57335067" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-254840d6 elementor-column elementor-col-25 elementor-top-column" data-id="254840d6" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-46d72310 elementor-widget elementor-widget-spacer" data-id="46d72310" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-7c7590af elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-gt3-core-counter" data-id="7c7590af" data-element_type="widget" data-widget_type="gt3-core-counter.default">
                                                      <div class="elementor-widget-container">
                                                         <div data-settings="{&quot;start&quot;:10,&quot;end&quot;:{{$clinics_count}},&quot;decimal&quot;:0,&quot;duration&quot;:0.5,&quot;options&quot;:{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}}" data-options="{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}" class="counter-wrapper icon_type-image icon_position-left">
                                                            <div class="icon_container" style="width: 50px;height: 50px;"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-7-100x100.png" alt="" /></div>
                                                            <div class="counter_text">
                                                               <div class="counter"></div>
                                                               <div class="hidden_end">{{$clinics_count}}</div>
                                                               <div class="description">
                                                                  <p>@lang('lang.klinikalar')</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--7c7590af">{"start":10,"end":{{$clinics_count}},"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":""}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-1fc23da8 elementor-widget elementor-widget-spacer" data-id="1fc23da8" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-6fa6ed8e elementor-column elementor-col-25 elementor-top-column" data-id="6fa6ed8e" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-52efdd40 elementor-widget elementor-widget-spacer" 
                                                   data-id="52efdd40" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5d20031f elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-gt3-core-counter" data-id="5d20031f" data-element_type="widget" data-widget_type="gt3-core-counter.default">
                                                      <div class="elementor-widget-container">
                                                         <div data-settings="{&quot;start&quot;:10,&quot;end&quot;:{{$department_count}},&quot;decimal&quot;:0,&quot;duration&quot;:0.5,&quot;options&quot;:{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}}" data-options="{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}" class="counter-wrapper icon_type-image icon_position-left">
                                                            <div class="icon_container" style="width: 48px;height: 48px;"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-8-96x96.png" alt="" /></div>
                                                            <div class="counter_text">
                                                               <div class="counter"></div>
                                                               <div class="hidden_end">{{$department_count}}</div>
                                                               <div class="description">
                                                                  <p>@lang('lang.sobeler')</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--5d20031f">{"start":10,"end":{{$department_count}},"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":""}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-357a4d8c elementor-widget elementor-widget-spacer" data-id="357a4d8c" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-4b936eab elementor-column elementor-col-25 elementor-top-column" data-id="4b936eab" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-a866003 elementor-widget elementor-widget-spacer" data-id="a866003" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5e13513b elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-gt3-core-counter" data-id="5e13513b" data-element_type="widget" data-widget_type="gt3-core-counter.default">
                                                      <div class="elementor-widget-container">
                                                         <div data-settings="{&quot;start&quot;:10,&quot;end&quot;:{{$doctors_count}},&quot;decimal&quot;:0,&quot;duration&quot;:0.5,&quot;options&quot;:{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}}" data-options="{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&quot;}" class="counter-wrapper icon_type-image icon_position-left">
                                                            <div class="icon_container" style="width: 50px;height: 50px;"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-9-100x100.png" alt="" /></div>
                                                            <div class="counter_text">
                                                               <div class="counter"></div>
                                                               <div class="hidden_end">{{$doctors_count}}</div>
                                                               <div class="description">
                                                                  <p>@lang('lang.hekimler')</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--5e13513b">{"start":10,"end":{{$doctors_count}},"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":""}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5271e3a2 elementor-widget elementor-widget-spacer" data-id="5271e3a2" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-760e03a2 elementor-column elementor-col-25 elementor-top-column" data-id="760e03a2" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-9cd5554 elementor-widget elementor-widget-spacer" data-id="9cd5554" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-25d10f65 elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-gt3-core-counter" data-id="25d10f65" data-element_type="widget" data-widget_type="gt3-core-counter.default">
                                                      <div class="elementor-widget-container">
                                                         <div data-settings="{&quot;start&quot;:10,&quot;end&quot;:{{$news_count}},&quot;decimal&quot;:0,&quot;duration&quot;:0.5,&quot;options&quot;:{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&lt;span class=\&quot;counter_suffix\&quot;&gt;+&lt;\/span&gt;&quot;}}" data-options="{&quot;useEasing&quot;:false,&quot;easingFn&quot;:&quot;&quot;,&quot;useGrouping&quot;:true,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;&lt;span class=\&quot;counter_suffix\&quot;&gt;+&lt;\/span&gt;&quot;}" class="counter-wrapper icon_type-image icon_position-left">
                                                            <div class="icon_container" style="width: 45px;height: 45px;"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-10-90x90.png" alt="" /></div>
                                                            <div class="counter_text">
                                                               <div class="counter"></div>
                                                               <div class="hidden_end">{{$news_count}}<span class="counter_suffix"></span></div>
                                                               <div class="description">
                                                                  <p>@lang('lang.saglamliq')</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <script type="application/json" id="settings--25d10f65">{"start":10,"end":{{$news_count}},"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">+<\/span>"}}</script>		
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5f36bb58 elementor-widget elementor-widget-spacer" data-id="5f36bb58" data-element_type="widget" data-widget_type="spacer.default">
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
     
      <div class='back_to_top_container'><a href='javascript:void(0)' class='gt3_back2top' id='back_to_top'></a></div>
      <!--End Main-->
 
@include('front.layouts.footer')
@include('front.widgets.index.index-script')