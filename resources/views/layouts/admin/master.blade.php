<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin 2 - Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    


    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>

<body class="font-sans antialiased" id="page-top">
        
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include("layouts.admin.elements.sidebar")


        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include("layouts.admin.elements.header")
                @yield('content')
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include("layouts.admin.elements.footer")
    @include('sweetalert::alert')
</body>

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Page level plugins -->
<!-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="{{asset('js/admin/chart-area-demo.js')}}"></script> -->
<!-- <script src="{{asset('js/admin/chart-pie-demo.js')}}"></script> -->

<script src="{{ asset('js/admin/sb-admin-2.js')}}"></script>
<script src="{{ asset('js/admin/sb-admin-2.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script src="{{ asset('js/app.js')}}"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

?>


</html>