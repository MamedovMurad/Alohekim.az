@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Sosial Şəbəkə Hesabları</h1>
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
                     <input type="hidden" name="nizam" value="sosial" />
                     <table class="table table-hover  table-striped w-full">
                        <tr>
                           <th>Facebook</th>
                           <td><input type="url" required="required" name="facebook" class="form-control round" value="{{$nizam->facebook}}"></td>
                        </tr>
                        <tr>
                           <th>İnstagram</th>
                           <td><input type="url" required="required" name="instagram" class="form-control round" value="{{$nizam->instagram}}"></td>
                        </tr>
                        <tr>
                           <th>YouTube</th>
                           <td><input type="url" required="required" name="youtube" class="form-control round" value="{{$nizam->youtube}}"></td>
                        </tr>
                     </table>
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