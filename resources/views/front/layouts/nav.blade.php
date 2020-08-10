@include('front.widgets.nav.preload')

<!--Nav-->
<div class='gt3_header_builder header_over_bg--tablet-off header_over_bg--mobile-off'>
   <div class='gt3_header_builder__container'>
      @include('front.widgets.nav.nav-computer-top')
      @include('front.widgets.nav.nav-computer-middle')
      @include('front.widgets.nav.nav-tablet-top')
      @include('front.widgets.nav.nav-tablet-middle')
      @include('front.widgets.nav.nav-mobile-top')
      @include('front.widgets.nav.nav-mobile-middle')
   </div>
   @include('front.widgets.nav.nav-mobile-menu')
</div>
<!--End Nav-->