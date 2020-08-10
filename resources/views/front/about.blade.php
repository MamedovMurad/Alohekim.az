<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Page Title -->
      <title>Haqqımızda | Alo Həkim</title>
      <!-- Meta Tags -->
      
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Alo Həkim" />
      <meta name="keywords" content="alo hekim,haqqimizda" />
      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
      @include('front.widgets.about.about-style')
      @include('front.layouts.nav')
      <!--about main-->
      <div class="gt3-page-title_wrapper">
         <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg' style="background-color:#fefefe;height:341px;color:#ffffff;background-image:url({{asset('front/')}}/wp-content/uploads/sites/62/2019/07/image35.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
            <div class='gt3-page-title__inner '>
               <div class='container'>
                  <div class='gt3-page-title__content'>
                     <div class='page_title'>
                        <h1>@lang('lang.haqqimizda')</h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{route('homepage')}}">@lang('lang.anasehife')</a><span class="gt3_pagination_delimiter"> / </span><span class="current">@lang('lang.haqqimizda')</span></div>
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
                        <div data-elementor-type="wp-post" data-elementor-id="233" class="elementor elementor-233" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                 <section class="elementor-element elementor-element-209b035b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="209b035b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-115c96a elementor-column elementor-col-100 elementor-top-column" data-id="115c96a" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-2a12360b elementor-widget elementor-widget-spacer" data-id="2a12360b" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element-custom_font_size elementor-element-custom_font_size_mobile elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-10f2d822 elementor-widget elementor-widget-text-editor" data-id="10f2d822" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-text-editor elementor-clearfix">
                                                            <h2>
                                                            @if(App::isLocale('az'))
                                                                {{$about->Basliq}}
                                                            @endif
                                                            @if(App::isLocale('en'))
                                                                {{$about->Basliq_en}}
                                                            @endif
                                                            @if(App::isLocale('ru'))
                                                                {{$about->Basliq_ru}}
                                                            @endif
                                                            </h2>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <section class="elementor-element elementor-element-72ab10a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="72ab10a" data-element_type="section">
                                                      <div class="elementor-container elementor-column-gap-default">
                                                         <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-2646e32f elementor-column elementor-col-50 elementor-inner-column" data-id="2646e32f" data-element_type="column">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element elementor-element-14e4632d elementor-widget elementor-widget-spacer" data-id="14e4632d" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="elementor-spacer">
                                                                              <div class="elementor-spacer-inner"></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="elementor-element elementor-element-7e6263a7 elementor-column elementor-col-50 elementor-top-column" data-id="7e6263a7" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                           <div class="elementor-widget-wrap">
                                                                              <div class="elementor-element elementor-element-7b00ecc8 elementor-widget elementor-widget-spacer" data-id="7b00ecc8" data-element_type="widget" data-widget_type="spacer.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                       <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-260a2545 elementor-widget elementor-widget-text-editor" data-id="260a2545" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                       <h4>@lang('lang.unvan')</h4>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element elementor-element-152c759b elementor-widget elementor-widget-spacer" data-id="152c759b" data-element_type="widget" data-widget_type="spacer.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                       <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-210eaf14 elementor-widget elementor-widget-text-editor" data-id="210eaf14" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                       <p>{{$nizam->address}}</p>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element elementor-element-2f047481 elementor-widget elementor-widget-spacer" data-id="2f047481" data-element_type="widget" data-widget_type="spacer.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                       <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-7375de5d elementor-widget elementor-widget-text-editor" data-id="7375de5d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                       <h4>@lang('lang.elaqenomresi')</h4>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element elementor-element-7ab2ce6e elementor-widget elementor-widget-spacer" data-id="7ab2ce6e" data-element_type="widget" data-widget_type="spacer.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                       <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-7282c561 elementor-widget elementor-widget-text-editor" data-id="7282c561" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>{{$nizam->mobile}}</p>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element elementor-element-68203ec3 elementor-widget elementor-widget-divider" data-id="68203ec3" data-element_type="widget" data-widget_type="divider.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                       <span class="elementor-divider-separator">
                                                                                       </span>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-7375de5d elementor-widget elementor-widget-text-editor" data-id="7375de5d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                       <h4>@lang('lang.email')</h4>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-605d160f elementor-widget elementor-widget-text-editor" data-id="605d160f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix"><span style="color: #31609f"><a href="mailto:example@example.com" style="color: #31609f">{{$nizam->email}}</a></span></div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="elementor-element elementor-element-7cece4ad elementor-widget elementor-widget-spacer" data-id="7cece4ad" data-element_type="widget" data-widget_type="spacer.default">
                                                                                 <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                       <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="elementor-element elementor-element-6ed3add8 elementor-widget elementor-widget-spacer" data-id="6ed3add8" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="elementor-spacer">
                                                                              <div class="elementor-spacer-inner"></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="gt3-core-button--alignment_left elementor-element elementor-element-5b827c8b elementor-widget elementor-widget-gt3-core-button" data-id="5b827c8b" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="gt3_module_button_elementor size_large alignment_left button_icon_none hover_none rounded">
                                                                              <a class="button_size_elementor_large alignment_left border_icon_none hover_none btn_icon_position_left" href="{{route('contact')}}">
                                                                              <span class="gt3_module_button__container">
                                                                              <span class="gt3_module_button__cover front"><span class="elementor_gt3_btn_text">@lang('lang.bizimleelaqe')</span></span>
                                                                              </span>
                                                                              </a>
                                                                           </div>
                                                                           <script type="application/json" id="settings--5b827c8b">[]</script>		
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6f90b10b elementor-column elementor-col-50 elementor-inner-column" data-id="6f90b10b" data-element_type="column">
                                                               <div class="elementor-column-wrap  elementor-element-populated">
                                                                  <div class="elementor-widget-wrap">
                                                                     <div class="elementor-element-custom_color elementor-element elementor-element-539b3fcc elementor-widget elementor-widget-text-editor" data-id="539b3fcc" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                           <div class="elementor-text-editor elementor-clearfix">
                                                                              <p>
                                                                                 @if(App::isLocale('az'))
                                                                                    {!!$about->mezmun!!}
                                                                                 @endif
                                                                                 @if(App::isLocale('en'))
                                                                                    {!!$about->mezmun_en!!}
                                                                                 @endif
                                                                                 @if(App::isLocale('ru'))
                                                                                    {!!$about->mezmun_ru!!}
                                                                                 @endif
                                                                                 
                                                                              </p>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </section>
                                                   <div class="elementor-element elementor-element-214ce1e8 elementor-widget elementor-widget-spacer" data-id="214ce1e8" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-7993f0f3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7993f0f3" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-260d9db0 elementor-column elementor-col-33 elementor-top-column" data-id="260d9db0" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-5c128fe8 elementor-widget elementor-widget-spacer" data-id="5c128fe8" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5974fa5c elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox" data-id="5974fa5c" data-element_type="widget" data-widget_type="gt3-core-imagebox.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                            <figure class="gt3-core-imagebox-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-11-oak4n5difwz34yz7cqljb6svv022t9m0gcs81bsm3k.png" title="icon-11" alt="icon-11" /></figure>
                                                            <div class="gt3-core-imagebox-content">
                                                               <div class="gt3-core-imagebox-title">
                                                                  <p class="gt3-core-imagebox-title">{{$nizam->mobile}}</b></p>
                                                               </div>
                                                               <p class="gt3-core-imagebox-description">@lang('lang.elaqenomresi')</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-2a2d3e8c elementor-widget elementor-widget-spacer" data-id="2a2d3e8c" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-c258f0d elementor-column elementor-col-33 elementor-top-column" data-id="c258f0d" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-5a704ab5 elementor-widget elementor-widget-spacer" data-id="5a704ab5" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-1684693 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox" data-id="1684693" data-element_type="widget" data-widget_type="gt3-core-imagebox.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                            <figure class="gt3-core-imagebox-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-13-oak4n5diizhlio4v5qjugm7o3uglj2sqa8iqix2kni.png" title="icon-13" alt="icon-13" /></figure>
                                                            <div class="gt3-core-imagebox-content">
                                                               <div class="gt3-core-imagebox-title">
                                                                  <p class="gt3-core-imagebox-title">{{$nizam->address}}</b></p>
                                                               </div>
                                                               <p class="gt3-core-imagebox-description">@lang('lang.unvan')</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-5d558e5a elementor-widget elementor-widget-spacer" data-id="5d558e5a" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-c692a07 elementor-column elementor-col-33 elementor-top-column" data-id="c692a07" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-6fdc6d3d elementor-widget elementor-widget-spacer" data-id="6fdc6d3d" data-element_type="widget" data-widget_type="spacer.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-35b57aed elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox" data-id="35b57aed" data-element_type="widget" data-widget_type="gt3-core-imagebox.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                            <figure class="gt3-core-imagebox-img"><img src="{{asset('front/')}}/wp-content/uploads/sites/62/elementor/thumbs/icon-14-oak4n6bcx9wzc4c3tj4njfor0fb8767ms2tgwmpd2u.png" title="icon-14" alt="icon-14" /></figure>
                                                            <div class="gt3-core-imagebox-content">
                                                               <div class="gt3-core-imagebox-title">
                                                                  <p class="gt3-core-imagebox-title">{{$nizam->email}}</p>
                                                               </div>
                                                               <p class="gt3-core-imagebox-description">@lang('lang.email')</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-2af081f elementor-widget elementor-widget-spacer" data-id="2af081f" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-6a818074 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6a818074" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-e2e6957 elementor-column elementor-col-100 elementor-top-column" data-id="e2e6957" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-299bc97 elementor-widget elementor-widget-google_maps" data-id="299bc97" data-element_type="widget" data-widget_type="google_maps.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe></div>
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
      @include('front.widgets.about.about-script')