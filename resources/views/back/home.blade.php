@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title font-size-26 font-weight-100">Statistik Məlumatlar</h1>
   </div>
   <div class="page-content container-fluid">
      <div class="row">
         <!-- First Row -->
         <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
               <div class="card-block bg-white p-20">
                  <a href="#" type="button" class="btn btn-floating btn-sm btn-danger">
                  <i class="icon wb-image" style="margin-top:8px"></i>
                  </a>
                  <span class="ml-15 font-weight-400">Klinikalar</span>
                  <div class="content-text text-center mb-0">
                     <i class="text-success icon wb-triangle-up font-size-20">
                     </i>
                     <span class="font-size-40 font-weight-100">{{$clinics_count}}</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
               <div class="card-block bg-white p-20">
                  <a href="#" type="button" class="btn btn-floating btn-sm btn-success">
                  <i class="icon fa fa-gear" style="margin-top:8px"></i>
                  </a>
                  <span class="ml-15 font-weight-400">Şöbələr</span>
                  <div class="content-text text-center mb-0">
                     <i class="text-success icon wb-triangle-up font-size-20">
                     </i>
                     <span class="font-size-40 font-weight-100">{{$department_count}}</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
               <div class="card-block bg-white p-20">
                  <a href="#" type="button" class="btn btn-floating btn-sm btn-primary"style="padding-top:9px">
                  H
                  </a>
                  <span class="ml-15 font-weight-400">Həkimlər</span>
                  <div class="content-text text-center mb-0">
                     <i class="text-success icon wb-triangle-up font-size-20">
                     </i>
                     <span class="font-size-40 font-weight-100">{{$doctors_count}}</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
               <div class="card-block bg-white p-20">
                  <a href="#" type="button" class="btn btn-floating btn-sm btn-warning">
                  <i class="icon wb-image" style="margin-top:8px"></i>
                  </a>
                  <span class="ml-15 font-weight-400">Xəbərlər</span>
                  <div class="content-text text-center mb-0">
                     <i class="text-danger icon wb-triangle-up font-size-20">
                     </i>
                     <span class="font-size-40 font-weight-100">{{$news_count}}</span>
                  </div>
               </div>
            </div>
         </div>
      
         <!-- End First Row -->
      </div>
   </div>
</div>
@include('back.layouts.footer')