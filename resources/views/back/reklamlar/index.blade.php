@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Reklamlar</h1>
   </div>
   <div class="page-content">
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="col-lg-12">
               <!-- Example Bordered Table -->
               <div class="example-wrap">
                 
                  <div class="example table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr align="center">
                              <th>№</th>
                              <th>Şəkil (1280 x 1260)</th>
                              <th>Ətraflı</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($sliders as $slider)
                           <tr align="center">
                              <td>{{$slider->id}}</td>
                              <td><img src="{{asset($slider->image)}}" alt="" width="100"></td>
                              <td><button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#mezmun{{$slider->id}}">Ətraflı</button></td>
                              <td>
                                 <a href="{{route('admin.slider.getUpdate',$slider->id)}}" class="btn btn-outline-primary edit-click"><i class="fa fa-edit"></i> Redaktə Et</a>
                                
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Example Bordered Table -->
      </div>
   </div>
</div>
<!-- End Page -->

@foreach ($sliders as $slider)
<!-- Mezmun Etrafli -->
<div class="modal fade" id="mezmun{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Reklam Ətraflı</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 1 (Az)</h5>
         </div>
         <div class="modal-body">{{$slider->text1}}</div>

         
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 1 (En)</h5>
         </div>
         <div class="modal-body">{{$slider->text1_en}}</div>

         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 1 (Ru)</h5>
         </div>
         <div class="modal-body">{{$slider->text1_ru}}</div>


         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 2 (Az)</h5>
         </div>
         <div class="modal-body">{{$slider->text2}}</div>


         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 2 (En)</h5>
         </div>
         <div class="modal-body">{{$slider->text2_en}}</div>

     
        
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 2 (Ru)</h5>
         </div>
         <div class="modal-body">{{$slider->text2_ru}}</div>
         
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 3 (Az)</h5>
         </div>
         <div class="modal-body">{{$slider->text3}}</div>

         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 3 (En)</h5>
         </div>
         <div class="modal-body">{{$slider->text3_en}}</div>

         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mətn 3 (Ru)</h5>
         </div>
         <div class="modal-body">{{$slider->text3_ru}}</div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
         </div>
      </div>
   </div>
</div>
<!--end -->
@endforeach

<!-- End -->
@include('back.layouts.footer')