<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>UZZAC</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assetss/images/favicon.ico')}}">

        <link rel="stylesheet" href="{{ asset('assetss/plugins/metro/MetroJs.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/plugins/morris/morris.css')}}">
        <link href="{{ asset('assetss/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <link href="{{ asset('assetss/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assetss/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet" type="text/css">
         <!-- DataTables -->
         <link href="{{ asset('assetss/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assetss/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- Responsive datatable examples -->
         <link href="{{ asset('assetss/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
        
         <style>
            .btn_1{
                text-align: center;
            }
            .btn_1 input{
                border: none;
                background-color: green;
                color: aliceblue;
                border-radius: 5px;
                
            }
         </style>
         @yield('css')
        
    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
                        {{-- <a href="#" class="logo"><img src="assetss/images/logo.png" height="100" alt="logo"></a> --}}
                    </div>
                </div>
               

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        
                     
                        @include('layouts.nav')
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                  
                    @include('layouts.header')
                    <!-- Top Bar End -->

                    @yield('content')

                </div> <!-- content -->
                
                <footer class="footer">
                    ©  2022 Designed By Branding Sparrow.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('assetss/js/jquery.min.js')}}"></script>
        <script src="{{asset('assetss/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assetss/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assetss/js/detect.js')}}"></script>
        <script src="{{asset('assetss/js/fastclick.js')}}"></script>
        <script src="{{asset('assetss/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assetss/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assetss/js/waves.js')}}"></script>
        <script src="{{asset('assetss/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assetss/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('assetss/plugins/metro/MetroJs.min.js')}}"></script>
        <script src="{{asset('assetss/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assetss/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assetss/plugins/sparkline-chart/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assetss/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('assetss/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assetss/pages/dashboard.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assetss/js/app.js')}}"></script>
         <!-- Required datatable js -->
         <script src="{{asset('assetss/plugins/datatables/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
         {{-- <!-- Buttons examples -->
         <script src="{{asset('assetss/plugins/datatables/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/jszip.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/pdfmake.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/vfs_fonts.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/buttons.html5.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/buttons.print.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/buttons.colVis.min.js')}}"></script> --}}
         <!-- Responsive examples -->
         <script src="{{asset('assetss/plugins/datatables/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('assetss/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
   
         <!-- Datatable init js -->
         <script src="{{asset('assetss/pages/datatables.init.js')}}"></script> 
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         <script>
            $('.dataTables-example').DataTable();
         </script>
@yield('scripts')
    </body>
</html>