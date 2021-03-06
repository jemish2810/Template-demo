<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              @include('admin.includes.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          @include('admin.includes.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    
   <script src="{{mix('admin1/css /sb-admin-2.css')}}"></script>
   <script src="{{mix('/admin1/vender/vendor.js')}}"></script>
   {{-- Chart  --}}
  <script src="{{mix('admin1/vender2/vendor2.js')}}"></script>
    
  
    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{asset(url('admin/vendor/jquery/jquery.min.js'))}}"></script>
    <script src="{{asset(url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js'))}}"></script>  --}}

    <!-- Core plugin JavaScript-->
    {{-- <script src="{{asset(url('admin/vendor/jquery-easing/jquery.easing.min.js'))}}"></script>  --}}

    <!-- Custom scripts for all pages-->
     {{-- <script src="{{asset(url('admin/js/sb-admin-2.min.js'))}}"></script> --}}
    <!-- Page level plugins -->
     {{-- <script src="{{asset(url('admin/vendor/chart.js/Chart.min.js'))}}"></script>
    
    <!-- Page level custom scripts -->
    <script src="{{asset(url('admin/js/demo/chart-area-demo.js'))}}"></script> 
     <script src="{{asset(url('admin/js/demo/chart-pie-demo.js'))}}"></script>  --}}
    
    {{-- chart js --}}
</body>

</html>
