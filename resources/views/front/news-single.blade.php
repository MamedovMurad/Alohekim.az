<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Page Title -->
      <title>
      @if(App::isLocale('az'))
                                 {{$news_single->title}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$news_single->title_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$news_single->title_ru}}
                                 @endif
         | Alo Həkim</title>
      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Alo Həkim Bizimlə Əlaqə" />
      <meta name="keywords" content="alo hekim,elaqe" />

      <link href="{{asset($nizam->favicon)}}" rel="shortcut icon" type="image/png">
      @include('front.widgets.news-single.news-style')
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
                           @if(App::isLocale('az'))
                           {{$news_single->title}}
                           @endif
                           @if(App::isLocale('en'))
                           {{$news_single->title_en}}
                           @endif
                           @if(App::isLocale('ru'))
                           {{$news_single->title_ru}}
                           @endif
                        </h1>
                     </div>
                     <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs"><a href="{{route('homepage')}}">@lang('lang.anasehife')</a><span class="gt3_pagination_delimiter"> / </span>
                           <span class="current">
                           @if(App::isLocale('az'))
                           {{$news_single->title}}
                           @endif
                           @if(App::isLocale('en'))
                           {{$news_single->title_en}}
                           @endif
                           @if(App::isLocale('ru'))
                           {{$news_single->title_ru}}
                           @endif
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site_wrapper fadeOnLoad">
         <div class="main_wrapper">
            <div class="container container-sidebar_right">
               <div class="row sidebar_right">
                  <div class="content-container span8">
                     <section id='main_content' class="gt3_module_blog">

                     
                        <div class="blog_post_preview format-standard-image">
                           <div class="item_wrapper">
                              <div class="blog_content">
                                 <a>
                                    <div class="blog_post_media">
                                       <img src="{{asset($news_single->image)}}" alt="" style="width:100%;height:450px" />
                                    </div>
                                 </a>
                                 <div class="listing_meta_wrap">
                                    <div class="listing_meta">
                                       <span class="post_date">{{$news_single->created_at}}</span>
                                    </div>
                                 </div>
                                 <h2 class="blogpost_title"><a href="{{asset('front/')}}/2019/07/20/the-case-of-misdiagnosis/index.html">
                                 @if(App::isLocale('az'))
                                 {{$news_single->title}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$news_single->title_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$news_single->title_ru}}
                                 @endif
                              </a></h2>
                                 <p>
                                 @if(App::isLocale('az'))
                                 {!!$news_single->content!!}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {!!$news_single->content_en!!}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {!!$news_single->content_ru!!}
                                 @endif
                                    
                              
                              </p>
                                 <div class="clear post_clear"></div>
                              </div>
                           </div>
                        </div>

                     </section>
                  </div>
                  <div class="sidebar-container span4">
                     <aside class='sidebar'>
                        <div id="posts-4" class="widget gt3_widget open widget_posts">
                           <h4 class="widget-title">@lang('lang.digerxeberler')</h4>
                           <ul class="recent_posts">
                              @foreach($news_category as $n)

                              <li class="with_img">
                                 <div class="recent_posts_content no_content">
                                    <a href="{{route('news.single',[$n->getSub_Category->slug,$n->slug])}}">
                                    <img src="{{asset($n->image)}}" style="width:66px;height:64px"></a>
                                    <div class="recent_posts_wrapinner">
                                       <div class="listing_meta">
                                          <span>Jul 20, 19</span>
                                       </div>
                                       <div class="post_title"><a href="{{route('news.single',[$n->getSub_Category->slug,$n->slug])}}">
                                       @if(App::isLocale('az'))
                                 {{$n->title}}
                                 @endif
                                 @if(App::isLocale('en'))
                                 {{$n->title_en}}
                                 @endif
                                 @if(App::isLocale('ru'))
                                 {{$n->title_ru}}
                                 @endif</a></div>
                                    </div>
                                 </div>
                              </li>
                           @endforeach
                           </ul>
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
      @include('front.widgets.news-single.news-script')