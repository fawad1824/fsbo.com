<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FBSO.com</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #00B98E;
            border-color: #00B98E;
        }

        .btn-primary {
            color: #fff;
            background-color: #00B98E;
            border-color: #00B98E;
            box-shadow: none;
        }

        a:hover,
        a {
            color: #00B98E;
            text-decoration: none;
        }

        .card-primary.card-outline {
            border-top: 3px solid #00B98E;
        }

        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
        .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #00B98E;
        }

        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active,
        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus,
        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
            background-color: #00B98E;
        }

        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link:focus,
        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link:hover {
            background-color: #00B98E;

        }

        .brand-link .brand-image {
            float: none;
            line-height: 9;
            margin-left: -0.2rem;
            margin-right: 0.5rem;
            margin-top: -3px;
            max-height: 69px;
            width: 64px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">Visit Website</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/Chat">
                        <i class="far fa-comments"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        @include('layouts.siderbar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           @include('layouts.title')
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer text-center">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2023 <a href="#">FBSO.com</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
