@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Haqqımızda</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{route('admin.about.update')}}" enctype="multipart/form-data">
                     @csrf
                   

                     <div class="example-wrap">
                        <h4 class="example-title">Başlıq (Az)</h4>
                        <input type="text" class="form-control round" value="{{$about->Basliq}}" name="Basliq" required="required"/>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Başlıq (En)</h4>
                        <input type="text" class="form-control round" value="{{$about->Basliq_en}}" name="Basliq_en" required="required"/>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Başlıq (Ru)</h4>
                        <input type="text" class="form-control round" value="{{$about->Basliq_ru}}" name="Basliq_ru" required="required"/>
                     </div>

                     <div class="example-wrap">
                        <h4 class="example-title">Məzmun (Az) </h4>
                        <textarea class="form-control" name="mezmun" rows="10">{{$about->mezmun}}</textarea>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Məzmun (En)</h4>
                        <textarea class="form-control" name="mezmun_en" rows="10">{{$about->mezmun_en}}</textarea>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Məzmun (Ru)</h4>
                        <textarea class="form-control" name="mezmun_ru" rows="10">{{$about->mezmun_ru}}</textarea>
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