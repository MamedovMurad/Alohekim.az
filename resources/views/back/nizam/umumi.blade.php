@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Səhifə Ayarları</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{route('admin.nizam.update')}}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="nizam" value="umumi" />
                     <div class="example-wrap">
                        <h4 class="example-title">Title</h4>
                        <input type="text" class="form-control round" id="title" name="title" value="{{$nizam->title}}">
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Description</h4>
                        <input type="text" class="form-control round" id="description" name="description" value="{{$nizam->description}}">
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Keywords</h4>
                        <input type="text" class="form-control round" id="keywords" name="keywords" value="{{$nizam->keywords}}">
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Cari Logo</h4>
                        <img width="150" src="{{asset($nizam->logo)}}" />         
                     </div>
                     <div class="example-wrap">
                          <h4 class="example-title">Logo</h4>
                          <input type="file" class="filestyle" name="logo"  data-buttonname="btn-secondary" > 
                    </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Cari Favicon</h4>
                        <img width="150" src="{{asset($nizam->favicon)}}" />   
                     </div>
                     <div class="example-wrap">
                          <h4 class="example-title">Favicon</h4>
                          <input type="file" class="filestyle" name="favicon"  data-buttonname="btn-secondary" > 
                    </div>
                    <div class="example-wrap">
                        <h4 class="example-title">Cari Robot.txt</h4>
                        <a href="{{asset($nizam->robot_txt)}}" download> 
                            <button type="button" class="btn btn-dark"><i class="icon wb-download" aria-hidden="true"></i> Download</button> 
                        </a>
                     </div>
                     <div class="example-wrap">
                          <h4 class="example-title">Robot.txt</h4>
                          <input type="file" class="filestyle" name="robot_txt"  data-buttonname="btn-secondary" > 
                    </div>
                     <button type="submit" class="btn btn-animate btn-animate-side btn-success float-right">
                     <span><i class="icon wb-edit" aria-hidden="true"></i>Yenilə</span>
                     </button>
                  </form>
                  <!-- End Example Rounded Input -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
@include('back.layouts.footer')