@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-content">
      <!-- Panel -->
      <div class="panel" style="max-width: 660px !important;margin: 0 auto;">
         <div class="panel-body container-fluid">
            <div class="email-title text-center">
               <img src="{{asset('back/base')}}/assets/images/logo-colored.png" alt="...">
               <h4 class="blue-grey-400 font-weight-400">Mesajlar</h4>
               <hr>
            </div>
            <div class="card">
               <div class="card-block px-0">
                  <div> <h3 class="card-title">
                        {{$message->name}}  {{$message->surname}} 
                        <p class="card-text"><small>Əlaqə Nömrəsi: {{$message->mobile}}</small></p>
                        <p class="card-text"><small>Email: {{$message->email}}</small></p>
                     </h3>
                  </div>
                  <p class="card-text">{{$message->message}}</p>
               </div>
            </div>
            <hr>
            <p class="card-text float-left">{{$message->created_at}}</p>
            <a href="{{route('admin.messages')}}" class="btn btn-info btn-sm float-right"style="margin-bottom:10px"><i class="fas fa-arrow-alt-circle-left"></i></a>
         </div>
      </div>
      <!-- End Panel -->
   </div>
</div>
<!-- End Page -->
@include('back.layouts.footer')