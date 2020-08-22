<div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="{{url('admin/index')}}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                            
                        </li>



                        <li class="nav-item start active open">
                            <a href="{{url('/')}}" class="nav-link nav-toggle" target="_blank">
                      <i class="fa fa-globe" aria-hidden="true" ></i>
                                <span class="title">Website</span>
                            </a>
                            
                        </li>


                        <li class="nav-item active " class="active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Home Page</span>
                                 <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{url('admin/slide')}}" class="nav-link ">
                                        <span class="title">First Section</span>
                                    </a>
                                </li>


                                <li class="nav-item  ">
                                    <a href="{{url('admin/services')}}" class="nav-link ">
                                        <span class="title">Services Section</span>
                                    </a>
                                </li>
                                


                                 <li class="nav-item  ">
                                    <a href="{{url('admin/aboutus')}}" class="nav-link ">
                                        <span class="title">About Section</span>
                                    </a>
                                </li>
                             

                              <li class="nav-item  ">
                                    <a href="{{url('admin/Features')}}" class="nav-link ">
                                        <span class="title">Features Section</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item  active">
                            <a class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Category</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{url('admin/Category')}}" class="nav-link ">
                                        <span class="title"> Create Category</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('admin/Refrenc')}}" class="nav-link ">
                                        <span class="title">Refrence</span>
<!--                                         <span class="badge badge-danger">2</span>
 -->                                    </a>
                                </li>
                             
                            </ul>
                        </li>
                        <li class="nav-item active ">
                            <a href="{{url('admin/Contact')}}" class="nav-link nav-toggle">
<!--  <span class="badge badge-danger">{{Session::get('Conactus')}}</span> --><i class="fa fa-question"></i>
                                <span class="title">Contact </span>

                            </a>
                            
                        </li>



                        
                        <li class="nav-item  active">
                            <a href="{{url('admin/brands')}}" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Brands</span>
                                <span class="arrow"></span>
                            </a>
                            
                        </li>
                        


                        <li class="nav-item  active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Pages</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                
                               <li class="nav-item  ">
                                    <a href="{{url('admin/All_Main_Pages')}}" class="nav-link ">
                                        <span class="title">Main Pages</span>
                                    </a>
                                </li>


                                


                                <li class="nav-item  ">
                                    <a href="{{url('admin/All_subMain_Pages')}}" class="nav-link ">
                                        <span class="title">SubMain Pages</span>
                                    </a>
                                </li>



                                
                              
                            </ul>
                        </li>
                        

                        <li class="nav-item  active">
                        
                                        


                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="nav-link nav-toggle">


                                                     <form id="logout-form" action="{{ 'App\Models\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                <i class="icon-key"></i>



                                <span class="title">Logout</span>
                                <span class="arrow"></span>
                            </a>
                            
                        </li>
                        
                    
                     
                       
                       
                       
                             
                         
                        
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>