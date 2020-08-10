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
      @include('front.widgets.news.news-style')
      @include('front.layouts.nav')
     
      <div class="gt3-page-title_wrapper">
         <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg'
          style="background-color:#2398a1;height:380px;color:#fefefe;margin-bottom:60px;
          background-image:url({{asset('front/')}}/wp-content/uploads/sites/62/2019/07/image34.jpg);
          background-size:cover;background-repeat:no-repeat;background-attachment:inherit;background-position:center center;">
            <div class='gt3-page-title__inner '>
               <div class='container'>
                  <div class='gt3-page-title__content'>
                     <div class='page_title'>
                        <h1>
                           @lang('lang.klinikalar')
                        </h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{route('homepage')}}">@lang('lang.anasehife')</a><span class="gt3_pagination_delimiter"> / </span>
                      
                        <span class="current">
                        @lang('lang.klinikalar')
                        </span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site_wrapper fadeOnLoad">
         <div class="main_wrapper">
            <div class="container">
                  <div class="content-container span8">
                     <section id='main_content'>
                        <div class="gt3_module_related_posts gt3_module_featured_posts items3">
                           <div class="spacing_beetween_items_30">
                               @foreach($clinics as $c)
                              <div class="blog_post_preview format-standard-image">
                                 <div class="item_wrapper">
                                    <div class="blog_content">
                                       <a href="{{route('clinic.single',$c->slug)}}">
                                          <div class="blog_post_media"><img src="{{asset($c->image)}}" /></div>
                                       </a>
                                       <h4 class="blogpost_title">
                                       <a href="{{route('clinic.single',$c->slug)}}">
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
                                       <div class="clear"></div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                        <ul class="pagerblock">
                        {{ $clinics->links() }}
                        </ul>  
                     </section>
                  </div>
            </div>
         </div>
         <!-- .main_wrapper -->
      </div>
      <!-- .site_wrapper -->

      @include('front.layouts.footer')
      @include('front.widgets.news.news-script')