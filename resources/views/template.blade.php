<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{URL::asset('images/logo.ico')}}" weight="100px" height="100px" type="image/ico"> </link>

    <title>Panel Admin | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{URL::asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <!-- Font Awesome -->

    <!-- NProgress -->

    
    <link href="{{URL::asset('build/css/fullcalendar/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    
    <link href="{{URL::asset('build//css/fullcalendar/fullcalendar/dist/fullcalendar.print.css')}}" el="stylesheet" media="print">
    <link href="{{URL::asset('build/css/custom.min.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('build/css/custom.css')}}" rel="stylesheet">

      <link href="{{URL::asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{URL::asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{URL::asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{URL::asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    
    <link href="{{URL::asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{URL::asset('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
      
    
@yield('css')    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <img src="{{URL::asset('images/ipm.png')}}" class="site_title" alt="">
            </div>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{URL::asset('images/user.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Session::get('username')}}</h2>
              </div>
            </div>


            <!-- /menu profile quick info -->

            

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>PMI ADMIN</h3>
                <ul class="nav side-menu">
                  <div id="ktDate" class="kt-date-today">
                  </div>
                  <li><a href="{{URL::to('/konten')}}"><i class="fa fa-home"></i> Beranda</a>
                    <ul class="nav child_menu">
                     
                    </ul>
                    
                  </li>
                  <ul class="nav side-menu">
                  <li><a><i class="fa fa-pencil"></i> Edit Informasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="{{URL::to('/stokdarah')}}">Stok Darah</a></li>
                      <li><a href="{{URL::to('/jadwal_mobilunit')}}">Jadwal Mobil Unit</a></li>
                      <li><a href="{{URL::to('/tambah_jadwal')}}">Tambah Jadwal Mobil Unit</a></li>
                    </ul>
                  <li><a href="{{URL::asset('inbox')}}"><i class=" fa fa-info"></i> Tentang </a>
                    <ul class="nav child_menu">
                   </li>
                 </ul>

                  <li><a><i class="fa fa-user"></i> Profil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::asset('/general')}}">Organisasi</a></li>
                      <li><a href="{{URL::asset('/visimisi')}}">Visi & Misi</a></li>
                    </ul>
                  </li>
                  <li><a href="{{URL::to('/kegiatan')}}"><i class="fa fa-table"></i> Agenda</a>
                    <ul class="nav child_menu">
                    </ul>
                  </li>
                  <li><a href="{{URL::to('/berita')}}"><i class="fa fa-star"></i> Berita</a>
                  <ul class="nav child_menu">
                  </ul>
                  </li>
                   <li><a><i class="fa fa-heart"></i> Ketentuan Donor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::asset('/ketentuandonor')}}">Syarat Donor Darah</a></li>
                      <li><a href="{{URL::asset('/syaratdonor')}}">Cara Donor Darah</a></li>
                      <li><a href="{{URL::asset('/manfaatdonor')}}">Manfaat Donor Darah</a></li>
                    </ul>
                  </li>

                  
                  <li><a href="{{URL::asset('/galeri')}}"><i class="fa fa-file-picture-o"></i> Galeri</a>
                    <ul class="nav child_menu">
                                            
                  </li>                  
                    </ul> 
                  </li>
                 
                    <li> <a href ="{{URL::to('kontak')}}"> <i class="fa fa-envelope" ></i> Kontak </a>
                    <ul class="nav child_menu">
                    </ul>
                  </li>
                </ul>
              </div>


              <div class="menu_section">
                        
                <ul class="nav side-menu">
                 
                 
                    
                    </ul>
                  </li>
                
                    </ul>
                  </li>
                  

                </ul>
               </div>

            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
{{-- !- top navigation -> --}}
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
 <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::asset('images/user.png')}}" alt="">{{ Session::get('username')}}
                    <span class=" fa fa-angle-down"></span>
                 <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{URL::to('javascript:;')}}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>  
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>

                </li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->
            
            <!-- conten -->
              @yield('content')
            <!-- end content -->

        <!-- footer content -->
      <footer>
          <div class="pull-right">
            PROJEK PMI XII-RPL 1 </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{URL::asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{URL::asset('vendors/fullcalendar/dist/fullcalendar.min.js')}}">  </script>


    <!-- Bootstrap -->
    
    <!-- FastClick -->
  
    <!-- NProgress -->
    
    <!-- FullCalendar -->

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('build/js/custom.min.js')}}"></script>

    <!-- bootstrap-datetimepicker -->    
    <script src="{{URL::asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Ion.RangeSlider -->
    <script src="{{URL::asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="{{URL::asset('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- jquery.inputmask -->
    <script src="{{URL::asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!-- jQuery Knob -->
    <script src="{{URL::asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- Cropper -->
    <script src="{{URL::asset('vendors/cropper/dist/cropper.min.js')}}"><
    </script>
    <script src="{{URL::asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{URL::asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{URL::asset('vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{URL::asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{URL::asset('vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{URL::asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{URL::asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{URL::asset('vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{URL::asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{URL::asset('vendors/starrr/dist/starrr.js')}}"></script>
    <!-- Custom Theme Scripts -->
    
    @yield('script')
  
  </body>
</html>
  