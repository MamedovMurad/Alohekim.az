@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Xəbər Məzmunu</h1>
   </div>
   <div class="page-content">
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="col-lg-12">
               <!-- Example Bordered Table -->
               <div class="example-wrap">
                  <button data-target="#exampleFormModal" data-toggle="modal" class="btn btn-animate btn-animate-side btn-info">
                  <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
                  </button>
                  <a href="{{route('admin.serviceContent.trashed')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-trash"></i></a>
                  <div class="example table-responsive">
                     <table class="table table-bordered" id="datatable-buttons">
                        <thead>
                           <tr align="center">
                              <th>Şəkil (1920x1130)</th>
                              <th>Kateqoriyası</th>
                              <th>Başlıq</th>
                              <th>Məzmun</th>
                              <th>Status</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($service_contents as $service_content)
                           <tr align="center">
                              <td><img src="{{asset($service_content->image)}}" alt="" width="100"></td>
                              <td>{{$service_content->getSub_Category->basliq}}</td>
                              <td>{{$service_content->title}}</td>
                              <td><button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#mezmun{{$service_content->id}}">Ətraflı</button></td>
                              <td><input class="status" data-id="{{$service_content->id}}" type="checkbox" data-on="Aktiv" data-off="Passiv" 
                                 data-onstyle="success" data-offstyle="danger" @if($service_content->status==1) checked @endif 
                                 data-toggle="toggle">
                              </td>
                              <td>
                                 <a href="{{route('admin.serviceContent.getUpdate',$service_content->id)}}" class="btn btn-outline-primary edit-click"><i class="fa fa-edit"></i></a>
                                 <a href="{{route('admin.serviceContent.delete',$service_content->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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
<script>
   $(function() {
     
      $('.status').change(function() {
       id = $(this)[0].getAttribute('data-id');
       status = $(this).prop('checked');
       $.get("{{route('admin.serviceContent.status')}}",{id:id,status:status}, function(data, status){
    console.log(data);
       });
     })
   })
</script>

@foreach ($service_contents as $service_content)
<!-- Mezmun Etrafli -->
<div class="modal fade" id="mezmun{{$service_content->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Ətraflı</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">
         <h4 class="example-title">Başlıq (Az)</h4>
         {{$service_content->title}}</div>

         
         <div class="modal-body">
         <h4 class="example-title">Başlıq (En)</h4>
         {{$service_content->title_en}}</div>

         
         <div class="modal-body"><h4 class="example-title">Başlıq (Ru)</h4>
         {{$service_content->title_ru}}</div>
         
         <div class="modal-body">
         <h4 class="example-title">Məzmun (Az)</h4>
         {!!$service_content->content!!}</div>

         
         <div class="modal-body">
         <h4 class="example-title">Məzmun (En)</h4>
         {!!$service_content->content_en!!}</div>

         
         <div class="modal-body"><h4 class="example-title">Məzmun (Ru)</h4>
         {!!$service_content->content_ru!!}</div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
         </div>
      </div>
   </div>
</div>
<!--end -->
@endforeach
<!--Elave Et Modal -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
   role="dialog" tabindex="-1">
   <div class="modal-dialog modal-simple">
      <form  method="POST" action="{{route('admin.serviceContent.create')}}" class="modal-content" enctype="multipart/form-data">
         @csrf
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Əlavə Etmə Paneli</h4>
         </div>
         <div class="modal-body">
            <div class="row">
              
               <div class="col-xl-12 form-group">
                  <select name="subcategory" class="form-control">
                           
                              @foreach($subcategories as $subcategory)
                              <option  value="{{$subcategory->id}}">{{$subcategory->basliq}}</option> 
                              @endforeach
                             
                  </select>
               </div>

               <div class="col-xl-12 form-group">
               <h4 class="example-title">Başlıq (Az)</h4>
                  <input class="form-control" required="required" name="basliq" type="text" placeholder="Başlıq Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Başlıq (En)</h4>
                  <input class="form-control" required="required" name="basliq_en" type="text" placeholder="Başlıq Əlavə Et" id="mezmun_en" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Başlıq (Ru)</h4>
                  <input class="form-control" required="required" name="basliq_ru" type="text" placeholder="Başlıq Əlavə Et" id="mezmun_ru" />
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (Az)</h4>
                   <textarea class="form-control" name="mezmun" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (En)</h4>
                   <textarea class="form-control" name="mezmun_en" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (Ru)</h4>
                   <textarea class="form-control" name="mezmun_ru" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Şəkil (1920x1130)</h4>
                  <input type="file" class="filestyle" name="image"  data-buttonname="btn-secondary" required="required"> 
               </div>
               

               <div class="col-md-12 float-right">
                  <button type="submit" class="btn btn-outline-info btn-block">Əlavə Et</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<!-- End -->
<!-- End Page -->
<script type="text/javascript" src="{{asset('back/')}}/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
   tinymce.init({
     
     entity_encoding : "raw",
     selector: "textarea",
     theme: "modern",
     plugins: [
     "advlist autolink lists link image charmap print preview hr anchor pagebreak",
     "searchreplace wordcount visualblocks visualchars code fullscreen",
     "insertdatetime media nonbreaking save table contextmenu directionality",
     "emoticons template paste textcolor colorpicker textpattern imagetools"
     ],
     toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
     toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
     image_advtab: true,
     templates: [
     { title: 'Test template 1', content: 'Test 1' },
     { title: 'Test template 2', content: 'Test 2' }
     ],
   
   });
</script>
@include('back.layouts.footer')