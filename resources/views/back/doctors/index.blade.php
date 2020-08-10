@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Şəkillər</h1>
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
                  <a href="{{route('admin.picture.trashed')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-trash"></i></a>
                  <div class="example table-responsive">
                     <table class="table table-bordered" id="datatable-buttons">
                        <thead>
                           <tr align="center">
                              <th>Şəkil (1200x700)</th>
                              <th>Şöbənin Adı</th>
                              <th>Adı Soyadı</th>
                              <th>Telefon</th>
                              <th>status</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($pictures as $picture)
                           <tr align="center">
                              <td><img src="{{asset($picture->image)}}" alt="" width="75"></td>
                              <td>{{$picture->getSub_Category->basliq}}</td>
                              <td>{{$picture->name_surname}}</td>
                              <td>{{$picture->phone}}</td>
                              <td><input class="status" data-id="{{$picture->id}}" type="checkbox" data-on="Aktiv" data-off="Passiv" 
                                 data-onstyle="success" data-offstyle="danger" @if($picture->status==1) checked @endif 
                                 data-toggle="toggle">
                              </td>
                              <td>
                                 <a  href="{{route('admin.picture.getData',$picture->id)}}" class="btn btn-outline-primary edit-click"><i class="fa fa-edit"></i></a>
                                 <a href="{{route('admin.picture.delete',$picture->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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
       $.get("{{route('admin.picture.status')}}",{id:id,status:status}, function(data, status){
    console.log(data);
       });
     })
   })
</script>

<!--Elave Et Modal -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
   role="dialog" tabindex="-1">
   <div class="modal-dialog modal-simple">
      <form  method="POST" action="{{route('admin.picture.create')}}" class="modal-content" enctype="multipart/form-data">
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
                  <h4 class="example-title">Alt Kateqoriya</h4>
                  <select name="subcategory" class="form-control">
                              @foreach($subcategories as $subcategory)
                              <option  value="{{$subcategory->id}}">{{$subcategory->basliq}}</option> 
                              @endforeach  
                  </select>
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Ad Soyad (Az)</h4>
                  <input class="form-control" required="required" name="name_surname" type="text" placeholder="Ad Soyad Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Ad Soyad (En)</h4>
                  <input class="form-control" required="required" name="name_surname_en" type="text" placeholder="Ad Soyad Əlavə Et" id="mezmun_en" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Ad Soyad (Ru)</h4>
                  <input class="form-control" required="required" name="name_surname_ru" type="text" placeholder="Ad Soyad Əlavə Et" id="mezmun_ru" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Elmi Dərəcə (Az)</h4>
                  <input class="form-control" required="required" name="degree" type="text" placeholder="Elmi Dərəcə Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Elmi Dərəcə (En)</h4>
                  <input class="form-control" required="required" name="degree_en" type="text" placeholder="Elmi Dərəcə Əlavə Et" id="mezmun_en" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Elmi Dərəcə (Ru)</h4>
                  <input class="form-control" required="required" name="degree_ru" type="text" placeholder="Elmi Dərəcə Əlavə Et" id="mezmun_ru" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Address (Az)</h4>
                  <input class="form-control" required="required" name="address" type="text" placeholder="Address Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Address (En)</h4>
                  <input class="form-control" required="required" name="address_en" type="text" placeholder="Address Əlavə Et" id="mezmun_en" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Address (Ru)</h4>
                  <input class="form-control" required="required" name="address_ru" type="text" placeholder="Address Əlavə Et" id="mezmun_ru" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Əlaq Nömrəsi</h4>
                  <input class="form-control" required="required" name="phone" type="tel" placeholder="Əlaq Nömrəsi Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Email</h4>
                  <input class="form-control" required="required" name="email" type="email" placeholder="Email Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">Facebook</h4>
                  <input class="form-control" required="required" name="facebook" type="url" placeholder="Əlaq Nömrəsi Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
               <h4 class="example-title">İnstagram</h4>
                  <input class="form-control" required="required" name="instagram" type="url" placeholder="Email Əlavə Et" id="mezmun" />
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (Az)</h4>
                   <textarea class="form-control" name="content" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (En)</h4>
                   <textarea class="form-control" name="content_en" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                   <h4 class="example-title">Məzmun (Ru)</h4>
                   <textarea class="form-control" name="content_ru" rows="5"></textarea>
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Şəkil (1200x700)</h4>
                  <input type="file" class="filestyle" name="image"  data-buttonname="btn-secondary"> 
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