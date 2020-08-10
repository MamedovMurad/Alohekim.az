@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Xəbər Redaktə Etmə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{route('admin.serviceContent.update',$service_content->id)}}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id"  />
                     <div class="example-wrap">
                        <h4 class="example-title">Kateqoriyası</h4>
                        <select name="subcategory" class="form-control">
                           
                              @foreach($subcategories as $subcategory)
                              <option value="{{$subcategory->id}}" @if($service_content->subcategory_id==$subcategory->id) selected @endif>{{$subcategory->basliq}}</option>
                              
                           @endforeach     
                        </select>
                     </div>
               <div class="example-wrap">
                  <h4 class="example-title">Başlıq (AZ)</h4>
                  <input class="form-control" required="required" name="basliq" type="text" value="{{$service_content->title}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Başlıq (En)</h4>
                  <input class="form-control" required="required" name="basliq_en" type="text" value="{{$service_content->title_en}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Başlıq (Ru)</h4>
                  <input class="form-control" required="required" name="basliq_ru" type="text" value="{{$service_content->title_ru}}" />
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (AZ)</h4>
                  <textarea class="form-control" name="mezmun" rows="10">{{$service_content->content}}</textarea>
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (En)</h4>
                  <textarea class="form-control" name="mezmun_en" rows="10">{{$service_content->content_en}}</textarea>
               </div>
               <div class="example-wrap">
                  <h4 class="example-title">Məzmun (Ru)</h4>
                  <textarea class="form-control" name="mezmun_ru" rows="10">{{$service_content->content_ru}}</textarea>
               </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Cari Şəkil</h4>
                        <img width="150" src="{{asset($service_content->image)}}" />         
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Şəkil</h4>
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