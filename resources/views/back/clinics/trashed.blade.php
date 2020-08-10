@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Silinənlər</h1>
   </div>
   <div class="page-content">
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="col-lg-12">
               <!-- Example Bordered Table -->
               <div class="example-wrap">
                  <a href="{{route('admin.conference')}}" class="btn btn-info btn-sm float-right"style="margin-bottom:10px"><i class="fas fa-arrow-alt-circle-left"></i></a>
                  <div class="example table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr align="center">
                              <th>Şəkil</th>
                              <th>Silinmə Tarixi</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($conferences as $conference)
                           <tr align="center">
                              <td><img src="{{asset($conference->image)}}" alt="" width="150"></td>
                              <td>{{$conference->deleted_at}}</td>
                              <td>
                                 <a href="{{route('admin.conference.recover',$conference->id)}}" title="Geri Qaytar" class="btn btn-outline-primary"><i class="fa fa-recycle"></i></a>
                                 <a href="{{route('admin.conference.harddelete',$conference->id)}}" title="Sil" class="btn btn-outline-danger"><i class="fa fa-times"></i></a>
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
@include('back.layouts.footer')