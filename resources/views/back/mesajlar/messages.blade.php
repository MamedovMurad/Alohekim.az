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
            @foreach ($messages as $message)
            <div class="card">
               <div class="card-block px-0">
                  <div>
                     <a href="{{route('admin.messages.delete',$message->id)}}" class="btn btn-default btn-sm float-right"><i class="fa fa-trash"></i></a>
                     <h3 class="card-title">
                        <a href="{{route('admin.messages.single',$message->id)}}" style="color:black;">{{$message->name}}  {{$message->surname}}</a>
                        <p class="card-text"><small>Əlaqə Nömrəsi: {{$message->mobile}}</small></p>
                        <p class="card-text"><small>Email: {{$message->email}}</small></p>
                     </h3>
                  </div>
                  <p class="card-text">
                     <small>{{$message->created_at->diffForHumans()}}</small>
                  </p>
               </div>
            </div>
            <hr>
            @endforeach
         </div>
      </div>
      <!-- End Panel -->
   </div>
</div>
<!-- End Page -->
@include('back.layouts.footer')