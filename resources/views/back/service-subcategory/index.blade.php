@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Xidmət Alt Kateqoriyaları</h1>
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
                  <a href="{{route('admin.ssubcategories.trashed')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-trash"></i></a>
                  <div class="example table-responsive">
                     <table class="table table-bordered" id="datatable-buttons" >
                        <thead>
                           <tr align="center">
                              <th>Kateqoriya Adı</th>
                              <th>Sıra</th>
                              <th>status</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($subcategories as $subcategory)
                           <tr align="center">
                              <td>{{$subcategory->basliq}}</td>
                              <td>{{$subcategory->sira}}</td>
                              <td><input class="status" data-id="{{$subcategory->id}}" type="checkbox" data-on="Aktiv" data-off="Passiv" 
                                 data-onstyle="success" data-offstyle="danger" @if($subcategory->status==1) checked @endif 
                                 data-toggle="toggle">
                              </td>
                              <td>
                                 <a  data-id="{{$subcategory->id}}" class="btn btn-outline-primary edit-click"><i class="fa fa-edit"></i></a>
                                 <a href="{{route('admin.ssubcategories.delete',$subcategory->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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
      $('.edit-click').click(function(){
         id = $(this)[0].getAttribute('data-id');
         $.ajax({
            type:'GET',
            url:'{{route('admin.ssubcategories.getData')}}',
            data:{id:id},
            success:function(data){
               console.log(data);  
               $('#title').val(data.basliq);   
               $('#title_en').val(data.basliq_en);
               $('#title_ru').val(data.basliq_ru); 
               $('#sira').val(data.sira); 
               $('#subcategory_id').val(data.id); 
               $('#editexampleFormModal').modal();    
               }
         });
      });
   
   
      $('.status').change(function() {
       id = $(this)[0].getAttribute('data-id');
       status = $(this).prop('checked');
       $.get("{{route('admin.ssubcategories.status')}}",{id:id,status:status}, function(data, status){
    console.log(data);
       });
     })
   })
</script>
<!--Redakte Et Modal -->
<div class="modal fade" id="editexampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
   role="dialog" tabindex="-1">
   <div class="modal-dialog modal-simple">
      <form  method="POST" action="{{route('admin.ssubcategories.update')}}" class="modal-content" enctype="multipart/form-data">
         @csrf
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Redaktə Etmə Paneli</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <input type="hidden" id="subcategory_id" name="id"  />
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Başlıq (Az)</h4>
                  <input class="form-control" required="required" id="title" name="title" type="text"  />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Başlıq (En)</h4>
                  <input class="form-control" required="required" id="title_en" name="title_en" type="text"  />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Başlıq (Ru)</h4>
                  <input class="form-control" required="required" id="title_ru" name="title_ru" type="text"  />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Sıra</h4>
                  <input class="form-control" required="required" id="sira" name="sira" type="number" max="30" min="1" id="sira" />
               </div>
               <div class="col-md-12 float-right">
                  <button type="submit" class="btn btn-outline-info btn-block">Redaktə Et</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<!-- End -->
<!--Elave Et Modal -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
   role="dialog" tabindex="-1">
   <div class="modal-dialog modal-simple">
      <form  method="POST" action="{{route('admin.ssubcategories.create')}}" class="modal-content" enctype="multipart/form-data">
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
                  <h4 class="example-title">Başlıq (Az)</h4>
                  <input class="form-control" required="required" name="title" type="text" placeholder="Başlıq Əlavə Et" id="Basliq" />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Başlıq (En)</h4>
                  <input class="form-control" required="required" name="title_en" type="text" placeholder="Başlıq Əlavə Et" id="Basliq_en" />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Başlıq (Ru)</h4>
                  <input class="form-control" required="required" name="title_ru" type="text" placeholder="Başlıq Əlavə Et" id="Basliq_ru" />
               </div>
               <div class="col-xl-12 form-group">
                  <h4 class="example-title">Sıra</h4>
                  <input class="form-control" required="required" name="sira" type="number" max="30" minlength="1" placeholder="Sıra Əlavə Et" id="faiz" />
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
@include('back.layouts.footer')