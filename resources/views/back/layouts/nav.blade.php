<div class="site-menubar">
    <div class="site-menubar-body">
       <div>
          <div>
             <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">Səhifələr</li>
              
            <li class="site-menu-item has-sub active">
                   <a href="{{route('admin.home')}}">
                   <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                   <span class="site-menu-title">Ana Səhifə</span>
                   </a>
            </li>
            
            <li class="site-menu-item has-sub">
                   <a href="{{route('admin.slider')}}">
                   <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                   <span class="site-menu-title">Reklamlar</span>
                   </a>
                </li>
                
            <li class="site-menu-item has-sub">
                   <a href="{{route('admin.about')}}">
                                <i class="site-menu-icon fa fa-user" aria-hidden="true"></i>
                                <span class="site-menu-title">Haqqimizda</span>
                   </a>

                   <li class="site-menu-item has-sub">
                   <a href="{{route('admin.conference')}}">
                                <i class="site-menu-icon fa fa-clinic-medical" aria-hidden="true"></i>
                                <span class="site-menu-title">Klinikalar</span>
                   </a>
                   
               </li>
               <li class="site-menu-item has-sub">
                   <a href="{{route('admin.psubcategories')}}">
                   <i class="site-menu-icon fa fa-first-aid" aria-hidden="true"></i>
                   <span class="site-menu-title">Şöbələr</span>
                   </a>
                </li>
                <li class="site-menu-item has-sub">
                   <a href="{{route('admin.picture')}}">
                   <i class="site-menu-icon fa fa-hand-holding-medical" aria-hidden="true"></i>
                   <span class="site-menu-title">Həkimlər</span>
                   </a>
                </li>
               <li class="site-menu-item has-sub">
                   <a href="javascript:void(0)">
                       <i class="site-menu-icon fa fa-book-medical" aria-hidden="true"></i>
                           <span class="site-menu-title">Sağlamlıq</span>
                           <span class="site-menu-arrow"></span>
                   </a>
                   <ul class="site-menu-sub">
                       <li class="site-menu-item has-sub">
                       <a href="{{route('admin.ssubcategories')}}">
                             <span class="site-menu-title">Kateqoriyalar</span>
                           </a>
                       </li>
                        <li class="site-menu-item active">
                           <a href="{{route('admin.serviceContent')}}">
                           <span class="site-menu-title">Xəbərlər</span>
                            </a>
                        </li>
                     </ul>
                </li>
              
               
                
                <li class="site-menu-item has-sub">
                   <a href="{{route('admin.nizam.elaqe')}}">
                   <i class="site-menu-icon fa fa-phone" aria-hidden="true"></i>
                   <span class="site-menu-title">Əlaqə Məlumatları</span>
                   </a>
                </li>
                <li class="site-menu-item has-sub">
                   <a href="{{route('admin.nizam.sosial')}}">
                   <i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
                   <span class="site-menu-title">Sosial Şəbəkəlar</span>
                   </a>
                </li>
                <li class="site-menu-item has-sub">
                   <a  href="{{route('admin.qeydiyyat')}}">
                   <i class="site-menu-icon icon wb-bell" aria-hidden="true"></i>
                   <span class="site-menu-title">Qeydiyyat</span>
                   </a>
                </li>
                <li class="site-menu-item has-sub">
                   <a  href="{{route('admin.messages')}}">
                   <i class="site-menu-icon wb-envelope" aria-hidden="true"></i>
                   <span class="site-menu-title">Mesajlar</span>
                   </a>
                </li>
                <li class="site-menu-item has-sub">
                   <a href="{{route('admin.nizam.umumi')}}">
                   <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                   <span class="site-menu-title">Ayarlar</span>
                   </a>
                </li>
             </ul>
          </div>
       </div>
    </div>
    <div class="site-menubar-footer">
       <a href="{{route('admin.nizam.umumi')}}" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Ayarlar">
       <span class="icon wb-settings" aria-hidden="true"></span>
       </a>
       <a href="{{route('homepage')}}" target="_blank" data-placement="top" data-toggle="tooltip" data-original-title="Səhifəyə Bax">
       <span class="icon wb-eye" aria-hidden="true"></span>
       </a>
       <a href="{{ route('logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Çıxış" role="menuitem"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
       <span class="icon wb-power" aria-hidden="true"></span>
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
       </form>
    </div>
 </div>