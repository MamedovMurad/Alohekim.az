@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Əlaqə Məlumatları</h1>
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
                     <input type="hidden" name="nizam" value="elaqe" />
                     <table class="table table-hover  table-striped w-full">
                        <tr>
                           <th>Ünvan</th>
                           <td><input type="text" required="required" name="address" class="form-control round" value="{{$nizam->address}}"></td>
                        </tr>
                        <tr>
                           <th>Əlaqe nömrəsi</th>
                           <td><input type="tel" required="required" name="mobile" class="form-control round" value="{{$nizam->mobile}}"></td>
                        </tr>
                        <tr>
                           <th>E-mail</th>
                           <td><input type="email" required="required" name="email" class="form-control round" value="{{$nizam->email}}"></td>
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