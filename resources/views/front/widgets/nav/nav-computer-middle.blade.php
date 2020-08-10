		<!--Computer Header Middle-->
        <div class='gt3_header_builder__section gt3_header_builder__section--middle gt3_header_builder__section--hide_on_tablet gt3_header_builder__section--hide_on_mobile'>
   <div class='gt3_header_builder__section-container container'>
      <!--Middle Header Left-->
      <div class='middle_left left header_side'>
         <div class='header_side_container'>
            <div class='logo_container'><a href="{{route('homepage')}}"><img class="default_logo" src="{{asset($nizam->logo)}}" alt="logo" style="height:41px;"></a></div>
         </div>
      </div>
      <!---End Middle Header Left-->  
      <!--Middle Header Right-->
      <div class='middle_right right header_side'>
         <div class='header_side_container'>
            <div class="gt3_header_builder_component gt3_header_builder_text_component">
               <div>
                  <p style="display: inline-block; vertical-align: middle; margin-right: 13px; margin-top: -15px;"><img class="" title="logo" src="{{asset('front/')}}/wp-content/uploads/sites/62/2019/07/icon-11.png" alt="logo" width="40" height="40" /></p>
                  <div style="display: inline-block; vertical-align: middle; text-align: left;">
                     <p style="line-height: 1.4; color: #31609f; font-size: 32px;"><strong><a href="tel:{{$nizam->mobile}}">{{$nizam->mobile}}</a></strong></p>
                     <p style="line-height: 1.5; font-size: 12px; letter-spacing: .2em; color: #4fb5eb;"><strong>@lang('lang.elaqenomresi')</strong></p>
                  </div>
               </div>
            </div>
            <div class="gt3_header_builder_component gt3_header_builder_text_component">
               <p><a class="gt3_icon_link gt3_custom_color" href="{{route('qeydiyyat')}}" target="_self" data-color="#31609f"
                data-hover-color="#ffffff" data-bg-color="#ffffff" data-hover-bg-color="#4cb8e0" data-border-color="#4cb8e0" 
                data-hover-border-color="#4cb8e0" style="margin-left: .3em; font-size: 0.778em;
                 font-weight: 400; line-height: 4em; display: inline-block; padding: 0 2.4em; letter-spacing: .2em; 
                 border: 1px solid #4cb8e0; border-radius: 3px;">@lang('lang.qeydiyyatdankec')</a> </p>
            </div>
         </div>
      </div>
      <!--End Middle Header Right-->  
   </div>
</div>
<!--End Header Middle-->