<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>{{ $title ?? 'Home' }} | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/backend') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('/backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        @stack('css')

        <!-- App Css-->
        <link href="{{ asset('/backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('backend.inc.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.inc.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                {{ date('Y') }} © {{ config('app.name') }}.
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


    </body>
     <!-- JAVASCRIPT -->
     <script src="{{ asset('/backend') }}/assets/libs/jquery/jquery.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/metismenu/metisMenu.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/simplebar/simplebar.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/node-waves/waves.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/waypoints/lib/jquery.waypoints.min.js" data-navigate-track></script>
     <script src="{{ asset('/backend') }}/assets/libs/jquery.counterup/jquery.counterup.min.js" data-navigate-track></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" data-navigate-track></script>
     <!-- App js -->
     <script src="{{ asset('/backend') }}/assets/js/app.js" data-navigate-track></script>
     <script>
        @if(session('error'))
        showAlert('error',"{{ session('error') }}")
        @elseif(session('success'))
        showAlert('success',"{{ session('success') }}")
        @endif
        
        // Show alert from component
        Livewire.on('alert', (e) => {
            showAlert(e[0].type,e[0].message);
        });
     </script>
    @stack('js')
</html>
