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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
     
      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
      @include('front.widgets.qeydiyyat.qeydiyyat-style')
      @include('front.layouts.nav')
      <div class="site_wrapper fadeOnLoad">
         <div class="main_wrapper">
            <div class="container container-sidebar_none">
               <div class="row sidebar_none">
                  <div class="content-container span12">
                     <section id='main_content'>
                        <div data-elementor-type="wp-post" data-elementor-id="903" class="elementor elementor-903" data-elementor-settings="[]">
                           <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                                 <section class="elementor-element elementor-element-94f4b90 elementor-hidden-phone elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="94f4b90" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-53deb71 elementor-column elementor-col-50 elementor-top-column" data-id="53deb71" data-element_type="column">
                                             <div class="elementor-column-wrap">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-1f8a739 elementor-column elementor-col-50 elementor-top-column" data-id="1f8a739" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-c932c8d elementor-align-left elementor-widget elementor-widget-gt3-core-divider" data-id="c932c8d" data-element_type="widget" data-widget_type="gt3-core-divider.default">
                                                      <div class="elementor-widget-container">
                                                      <div class="gt3_divider_wrapper-elementor ">
                                                            <h6>@lang('lang.qeydiyyatdankecin')</h6>
                                                            <span class="gt3_divider_line gt3_divider_line--right"><span></span></span>	
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-6cd93b7 elementor-widget elementor-widget-heading" data-id="6cd93b7" data-element_type="widget" data-widget_type="heading.default">
                                                   <div class="elementor-widget-container">
                                                         <h2 class="elementor-heading-title elementor-size-default">@lang('lang.qeydiyyatdankec')</h2>
                                                      </div>
                                                   </div>
                                                   <div class="elementor-element elementor-element-6f7d239 elementor-widget elementor-widget-shortcode" data-id="6f7d239" data-element_type="widget" data-widget_type="shortcode.default">
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
                                                   <div class="elementor-element elementor-element-6e681ed elementor-widget elementor-widget-spacer" data-id="6e681ed" data-element_type="widget" data-widget_type="spacer.default">
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
                                 <section class="elementor-element elementor-element-67ae4d5 elementor-section-stretched elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="67ae4d5" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-3e77333 elementor-column elementor-col-100 elementor-top-column" data-id="3e77333" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="elementor-element elementor-element-09b3972 elementor-widget elementor-widget-image" data-id="09b3972" data-element_type="widget" data-widget_type="image.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-image">
                                                            <img width="1280" height="900" src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/08/image78.jpg" class="attachment-full size-full" alt="" srcset="https://livewp.site/wp/md/sirona/wp-content/uploads/sites/62/2019/08/image78.jpg 1280w, https://livewp.site/wp/md/sirona/wp-content/uploads/sites/62/2019/08/image78-300x211.jpg 300w, https://livewp.site/wp/md/sirona/wp-content/uploads/sites/62/2019/08/image78-768x540.jpg 768w, https://livewp.site/wp/md/sirona/wp-content/uploads/sites/62/2019/08/image78-1024x720.jpg 1024w" sizes="(max-width: 1280px) 100vw, 1280px" title="image78" />											
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
      @include('front.widgets.qeydiyyat.qeydiyyat-script')