@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Reklar Redaktə Etmə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{route('admin.slider.update',$slider->id)}}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id"  />

                

           
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-1 (Az)</h4>
                  <input class="form-control" required="required" name="mezmun1" type="text" value="{{$slider->text1}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-1 (En)</h4>
                  <input class="form-control" required="required" name="mezmun1_en" type="text" value="{{$slider->text1_en}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-1 (Ru)</h4>
                  <input class="form-control" required="required" name="mezmun1_ru" type="text" value="{{$slider->text1_ru}}" />
               </div>

               <div class="example-wrap">
               ---------------------------------------------------------------------------------------------------------------------------------------------------             
               </div>
               
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-2 (Az)</h4>
                  <input class="form-control" required="required" name="mezmun2" type="text" value="{{$slider->text2}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-2 (En)</h4>
                  <input class="form-control" required="required" name="mezmun2_en" type="text" value="{{$slider->text2_en}}" />
               </div>   
               <div class="example-wrap">
                  <h4 class="example-title">Mətn-2 (Ru)</h4>
                  <input class="form-control" required="required" name="mezmun2_ru" type="text" value="{{$slider->text2_ru}}" />
               </div>
               
               <div class="example-wrap">
               ---------------------------------------------------------------------------------------------------------------------------------------------------             
               </div>

               <div class="example-wrap">
                   <h4 class="example-title">Cari Şəkil</h4>
                   <img width="150" src="{{asset($slider->image)}}" />         
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Şəkil (1280 x 1260)</h4>
                  <input type="file" class="filestyle" name="image"  data-buttonname="btn-secondary"> 
               </div>
              
                     <button type="submit" class="btn btn-animate btn-animate-side btn-success float-right">
                     <span><i class="icon wb-edit" aria-hidden="true"></i>Redaktə Et</span>
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