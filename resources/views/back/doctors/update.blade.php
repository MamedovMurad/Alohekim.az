@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Həkim Redaktə Etmə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{route('admin.picture.update',$pictures->id)}}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id"  />
                     <div class="example-wrap">
                        <h4 class="example-title">Kateqoriyası</h4>
                        <select name="subcategory" class="form-control">
                           
                              @foreach($departments as $d)
                              <option value="{{$d->id}}" @if($d->id== $pictures->subcategory_id) selected @endif>{{$d->basliq}}</option>
                              
                           @endforeach     
                        </select>
                     </div>
               <div class="example-wrap">
                  <h4 class="example-title">Ad Soyad (AZ)</h4>
                  <input class="form-control" required="required" name="name_surname" type="text" value="{{$pictures->name_surname}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Ad Soyad (En)</h4>
                  <input class="form-control" required="required" name="name_surname_en" type="text" value="{{$pictures->name_surname_en}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Ad Soyad (Ru)</h4>
                  <input class="form-control" required="required" name="name_surname_ru" type="text" value="{{$pictures->name_surname_ru}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Elmi Dərəcə (AZ)</h4>
                  <input class="form-control" required="required" name="degree" type="text" value="{{$pictures->degree}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Elmi Dərəcə (En)</h4>
                  <input class="form-control" required="required" name="degree_en" type="text" value="{{$pictures->degree_en}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Elmi Dərəcə (Ru)</h4>
                  <input class="form-control" required="required" name="degree_ru" type="text" value="{{$pictures->degree_ru}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Address (AZ)</h4>
                  <input class="form-control" required="required" name="address" type="text" value="{{$pictures->address}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Address (En)</h4>
                  <input class="form-control" required="required" name="address_en" type="text" value="{{$pictures->address_en}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Address (Ru)</h4>
                  <input class="form-control" required="required" name="address_ru" type="text" value="{{$pictures->address_ru}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Əlaqə Nömrəsi</h4>
                  <input class="form-control" required="required" name="phone" type="text" value="{{$pictures->phone}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Email)</h4>
                  <input class="form-control" required="required" name="email" type="text" value="{{$pictures->email}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Facebook</h4>
                  <input class="form-control" required="required" name="facebook" type="text" value="{{$pictures->facebook}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">İnstagram</h4>
                  <input class="form-control" required="required" name="instagram" type="text" value="{{$pictures->instagram}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (AZ)</h4>
                  <textarea class="form-control" name="content" rows="10">{{$pictures->content}}</textarea>
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (En)</h4>
                  <textarea class="form-control" name="content_en" rows="10">{{$pictures->content_en}}</textarea>
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (Ru)</h4>
                  <textarea class="form-control" name="content_ru" rows="10">{{$pictures->content_ru}}</textarea>
               </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Cari Şəkil</h4>
                        <img width="150" src="{{asset($pictures->image)}}" />         
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Şəkil (1200x700)</h4>
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