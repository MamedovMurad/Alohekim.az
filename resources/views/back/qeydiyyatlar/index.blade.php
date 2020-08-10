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
               <h4 class="blue-grey-400 font-weight-400">Qeydiyyat</h4>
               <hr>
            </div>
            @foreach ($qeydiyyat as $q)
            <div class="card">
               <div class="card-block px-0">
                  <div>
                     <a href="{{route('admin.qeydiyyat.delete',$q->id)}}" class="btn btn-default btn-sm float-right"><i class="fa fa-trash"></i></a>
                     <h3 class="card-title">
                        <a href="{{route('admin.qeydiyyat.single',$q->id)}}" style="color:black;">{{$q->name}}  {{$q->surname}}</a>
                        <p class="card-text"><small>Əlaqə Nömrəsi: {{$q->mobile}}</small></p>
                        <p class="card-text"><small>Email: {{$q->email}}</small></p>
                        <p class="card-text"><small>Vəzifəsi: {{$q->position}}</small></p>
                     </h3>
                  </div>
                  <p class="card-text">
                     <small>{{$q->created_at}}</small>
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