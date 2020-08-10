<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Page Title -->
      <title>Klinikalar | Alo Həkim </title>
      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Alo Həkim Bizimlə Əlaqə" />
      <meta name="keywords" content="alo hekim,elaqe" />
      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
    
      @include('front.widgets.clinic-single.clinic-style')
      @include('front.layouts.nav')

      <div class="gt3-page-title_wrapper">
         <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg' style="background-color:#2398a1;height:380px;color:#fefefe;margin-bottom:60px;background-image:url({{asset('front/')}}/wp-content/uploads/sites/62/2019/07/image29.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:inherit;background-position:center center;">
            <div class='gt3-page-title__inner '>
               <div class='container'>
                  <div class='gt3-page-title__content'>
                     <div class='page_title'>
                        <h1> @if(App::isLocale('az'))
                                                                     {{$clinic->title}}
                                                                     @endif
                                                                     @if(App::isLocale('en'))
                                                                     {{$clinic->title_en}}
                                                                     @endif
                                                                     @if(App::isLocale('ru'))
                                                                     {{$clinic->title_ru}}
                                                                     @endif</h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{asset('front/')}}/index.html">@lang('lang.anasehife')</a><span class="gt3_pagination_delimiter"> / </span><span class="current"> @if(App::isLocale('az'))
                                                                     {{$clinic->title}}
                                                                     @endif
                                                                     @if(App::isLocale('en'))
                                                                     {{$clinic->title_en}}
                                                                     @endif
                                                                     @if(App::isLocale('ru'))
                                                                     {{$clinic->title_ru}}
                                                                     @endif</span></div>
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
                        <div data-elementor-type="wp-post" data-elementor-id="336" class="elementor elementor-336" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                 <section class="elementor-element elementor-element-28582195 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="28582195" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-55935f6f elementor-column elementor-col-100 elementor-top-column" data-id="55935f6f" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-41cb9d94 post_has_media_content-yes elementor-widget elementor-widget-gt3-core-blog" data-id="41cb9d94" data-element_type="widget" data-widget_type="gt3-core-blog.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3_module_blog items1  items_type1" data-settings="{&quot;packery&quot;:false}">
                                                            <div class="blog_post_preview isotope_item isotope-item loading  format-standard-image portraits packery_blog_item_1  ">
                                                               <div class="item_wrapper" >
                                                                  <div class="blog_content">
                                                                     <div class="blog_post_media"><img src="{{asset($clinic->image)}}" alt="" /></div>
                                                                     <div class="gt3_page_title_cats"><span class="post_category">
                                                                      </span></div>
                                                                   
                                                                     <h2 class="blogpost_title"><a href="{{asset('front/')}}/2019/07/20/the-case-of-misdiagnosis/index.html">
                                                                     @if(App::isLocale('az'))
                                                                     {{$clinic->title}}
                                                                     @endif
                                                                     @if(App::isLocale('en'))
                                                                     {{$clinic->title_en}}
                                                                     @endif
                                                                     @if(App::isLocale('ru'))
                                                                     {{$clinic->title_ru}}
                                                                     @endif
                                                                    </a></h2>
                                                                     <div class="blog_item_description">
                                                                     @if(App::isLocale('az'))
                                                                     {!!$clinic->description!!}
                                                                     @endif
                                                                     @if(App::isLocale('en'))
                                                                     {!!$clinic->description_en!!}
                                                                     @endif
                                                                     @if(App::isLocale('ru'))
                                                                     {!!$clinic->description_ru!!}
                                                                     @endif
                                                                     </div>
                                                                     <div class="clear post_clear"></div>
                                                                    
                                                                  </div>
                                                               </div>
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
      @include('front.widgets.clinic-single.clinic-script')