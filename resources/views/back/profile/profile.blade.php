@include('back.layouts.header')
@include('back.layouts.nav')
<!-- Page -->
<div class="page">
   <div class="page-content container-fluid">
      <div class="row">
         <div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center" >
               <div class="card-block">
                  <a class="avatar avatar-lg" href="javascript:void(0)" style="width:130px !important">
                  <img src="{{asset('back/')}}/global/portraits/5.jpg" alt="..." style="height:130px !important;">
                  </a>
                  <h4 class="tedris-user">{{$user->name}}</h4>
                  <p class="tedris-job">Admin</p>
                  <hr />
               </div>
            </div>
            <!-- End Page Widget -->
         </div>
         <div class="col-lg-9">
            <!-- Panel -->
            <div class="panel">
               <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                     <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#melumatlar"
                        aria-controls="melumatlar" role="tab">Şəxsi Məlumatları</a></li>
                  </ul>
                  <form method="POST" action="{{route('admin.profile.update')}}">
                     @csrf
                     <div class="tab-content">
                        <div class="tab-pane active animation-slide-left" id="melumatlar" role="tabpanel">
                           <div class="row">
                              <div class="col-12">
                                 <div class="panel">
                                    <header class="panel-heading">
                                       <div class="panel-actions"></div>
                                    </header>
                                    <div class="panel-body">
                                       <table class="table table-hover  table-striped w-full">
                                          <tr>
                                             <th>Ad Soyad</th>
                                             <td><input type="text" required="required" name="AdSoyad" class="form-control round" value="{{$user->name}}"></td>
                                          </tr>
                                          <tr>
                                             <th>Email</th>
                                             <td><input type="email" required="required" name="email" class="form-control round" value="{{$user->email}}"></td>
                                          </tr>
                                          <tr>
                                             <th>Şifrə</th>
                                             <td><input type="password"  name="password" class="form-control round""></td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-info" >REDAKTƏ ET</button>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Panel -->
@include('back.layouts.footer')