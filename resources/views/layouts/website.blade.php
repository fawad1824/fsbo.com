<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FSBO - Real Estate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <style>
        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            background: #00B98E;
            max-width: 41.1px;
            border-radius: 31px;
        }

        .btn.btn-primary,
        .btn.btn-secondary {
            color: #FFFFFF;
            font-size: 14px;
        }
    </style>
    <!-- Favicon -->
    <link href="{{ asset('website/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="Home Page.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="{{ asset('website/img/icon-deal.png') }}" alt="Icon"
                            style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">FSBO </h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="Home Page.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="property-agent.html" class="nav-item nav-link">Dealers</a>
                        <a href="property-list.html" class="nav-item nav-link">Properties</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="login.html" class="nav-item nav-link">Login</a>
                        <a href="register.html" class="nav-item nav-link">Register</a>
                        <a href="Home Page.html" class="nav-item nav-link">Logout</a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->





        @yield('content')



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn " data-wow-delay="0.1s ">
            <div class="container py-5 ">
                <div class="row g-5 ">
                    <div class="col-lg-4 col-md-6 ">
                        <h5 class="text-white mb-4 ">Get In Touch</h5>
                        <p class="mb-2 "><i class="fa fa-map-marker-alt me-3 "></i>123 Street, Sialkot, Pakistan</p>
                        <p class="mb-2 "><i class="fa fa-phone-alt me-3 "></i>+92 345678901</p>
                        <p class="mb-2 "><i class="fa fa-envelope me-3 "></i>info@example.com</p>
                        <div class="d-flex pt-2 ">
                            <a class="btn btn-outline-light btn-social " href=" "><i
                                    class="fab fa-twitter "></i></a>
                            <a class="btn btn-outline-light btn-social " href=" "><i
                                    class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-outline-light btn-social " href=" "><i
                                    class="fab fa-youtube "></i></a>
                            <a class="btn btn-outline-light btn-social " href=" "><i
                                    class="fab fa-linkedin-in "></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <h5 class="text-white mb-4 ">Quick Links</h5>
                        <a class="btn btn-link text-white-50 " href=" ">About Us</a>
                        <a class="btn btn-link text-white-50 " href=" ">Contact Us</a>
                        <a class="btn btn-link text-white-50 " href=" ">Our Services</a>
                        <a class="btn btn-link text-white-50 " href=" ">Privacy Policy</a>
                        <a class="btn btn-link text-white-50 " href=" ">Terms & Condition</a>
                    </div>

                    <div class="col-lg-4 col-md-6 ">
                        <h5 class="text-white mb-4 ">Newsletter</h5>
                        <div class="position-relative mx-auto " style="max-width: 400px; ">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 " type="text "
                                placeholder="Your email ">
                            <button type="button "
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 ">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="copyright ">
                    <div class="row ">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
                            &copy; <a class="border-bottom "href="# ">FSBO</a>, All Right Reserved 2023.

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="# " class="btn btn-lg btn-primary btn-lg-square back-to-top "><i
                class="bi bi-arrow-up "></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js "></script>
    <script src="{{ asset('website/lib/wow/wow.min.js') }} "></script>
    <script src="{{ asset('website/lib/easing/easing.min.js ') }}"></script>
    <script src="{{ asset('website/lib/waypoints/waypoints.min.js') }} "></script>
    <script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }} "></script>

    <!-- Template Javascript -->
    <script src="{{ asset('website/js/main.js') }} "></script>
    @livewireScripts
</body>

</html>