<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Appointment App</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/eye.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 float-left">
                        <div class="logo">
                            <a href="/"><img alt="Logo" src="assets/img/logo.png" width="56" height="50"></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <nav class="navbar navbar-expand-md p-0">
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav main-nav float-right ml-auto">
                                    <li class="active nav-item">
                                        @auth
                                        <a href="/home" class="nav-link">Dashboard</a>
                                        @endauth
                                        @guest
                                        <a href="/" class="nav-link">Home</a>
                                        @endguest

                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="/about" class="nav-link">About Us</a>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li> -->


                                    <!-- <li class="nav-item">
                                        <a href="/contact" class="nav-link">Contact Us</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="btn btn-primary appoint-btn nav-link"
                                            href="/appointment">Appointment</a>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i
                                                class="fas fa-cog"></i></a>
                                        @guest
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>


                                        </div>
                                        @endguest
                                        @auth
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button class="dropdown-item" type="submit">Log Out</button>
                                            </form>

                                        </div>
                                        @endauth
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="mobile-header">
        <div class="panel-control-left">
            <a class="toggle-menu" href="#side_menu"><i class="fas fa-bars"></i></a>
        </div>
        <div class="page_title">
            <a href="/index"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="img-fluid" width="60" height="60"></a>
        </div>
    </header>
    <main>
        <div class="sidebar sidebar-menu" id="side_menu">
            <div class="sidebar-inner slimscroll">
            <a id="close_menu" href="#"><i class="fas fa-times"></i></a>
            <ul class="mobile-menu-wrapper" style="display: block;">
            <li class="active">
            <div class="mobile-menu-item clearfix">
                @auth
                <a href="/home">Dashboard</a>
                @endauth
                @guest
                <a href="/">Home</a>
                @endguest
            </div>
            </li>
            <!-- <li>
            <div class="mobile-menu-item clearfix">
            <a href="/about">About Us</a>
            </div>
            </li> -->



            <!-- <li>
            <div class="mobile-menu-item clearfix">
            <a href="/contact">Contact Us</a>
            </div>
            </li> -->
            <!-- <li>
            <div class="mobile-menu-item clearfix">
            <a href="appointment.html">Appointment</a>
            </div>
            </li> -->

            <li>
            @guest
            <div class="mobile-menu-item clearfix">
            <a href="{{ route('login') }}">Login</a>
            </div>
            @endguest
            @auth
            <div class="mobile-menu-item clearfix">
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Log Out</button>
            </form>
            </div>
            @endauth

            </ul>
            </div>
        </div>


            <div class="main-content">
            <section class="section home-banner row-middle">
            <div class="inner-bg"></div>
            <div class="container">
            <div class="row">

            </div>
            </div>
            </section>
            <section class="section features">
            <div class="container">
            <div class="row">
            <div class="col-12">
            <div class="section-header text-center">
            <h3 class="header-title">About Medifab</h3>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus
            nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices.
            Duis dictum eget dolor vel blandit.</p>
            </div>
            </div>
            </div>
            <div class="row feature-row">
            <div class="col-md-4">
            <div class="feature-box">
            <div class="feature-img">
            <img width="60" height="60" alt="Book an Appointment" src="assets/img/icon-01.png">
            </div>
            <h4>Book an Appointment</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor.
            </p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="feature-box">
            <div class="feature-img">
            <img width="60" height="60" alt="Consult with a Doctor" src="assets/img/icon-02.png">
            </div>
            <h4>Consult with a Doctor</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor.
            </p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="feature-box">
            <div class="feature-img">
            <img width="60" height="60" alt="Make a family Doctor" src="assets/img/icon-03.png">
            </div>
            <h4>Make a family Doctor</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor.
            </p>
            </div>
            </div>
            </div>
            </div>
            </section>
            <section class="section meet-doctors">
            <div class="container">
            <div class="row">
            <div class="col-12">
            <div class="section-header text-center">
            <h3 class="header-title">Meet our Doctors</h3>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus
            nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices.
             Duis dictum eget dolor vel blandit.
            </p>
            </div>
            </div>
            </div>
            <div id="our_doctor" class="owl-carousel text-center">
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-01.jpg" alt="Dr. Albert Sandoval" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Albert Sandoval</div>
            <div class="doctors-position">Neurologist</div>
            </a>
            </div>
            </div>
            <div class="item">
            <a href="doctor-details.html">
            <div class="doctor text-center">
            <img src="assets/img/doctor-thumb-02.jpg" alt="Dr. Linda Barrett" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Linda Barrett</div>
            <div class="doctors-position">Dentist</div>
            </div>
            </a>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-03.jpg" alt="Dr. Cristina Groves" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Cristina Groves</div>
            <div class="doctors-position">Gynecologist</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-04.jpg" alt="Dr. Henry Daniels" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Henry Daniels</div>
            <div class="doctors-position">Cardiologist</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-05.jpg" alt="Dr. Diana Bailey" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Diana Bailey</div>
            <div class="doctors-position">General Surgery</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-06.jpg" alt="Dr. Justin Parker" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Justin Parker</div>
            <div class="doctors-position">Physical Therapist</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-07.jpg" alt="Dr. Marie Wells" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Marie Wells</div>
            <div class="doctors-position">Psychiatrist</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-08.jpg" alt="Dr. Pamela Curtis" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Pamela Curtis</div>
            <div class="doctors-position">Pediatrics</div>
            </a>
            </div>
            </div>
            <div class="item">
            <div class="doctor text-center">
            <a href="doctor-details.html">
            <img src="assets/img/doctor-thumb-09.jpg" alt="Dr. Ronald Jacobs" class="rounded-circle" width="150" height="150">
            <div class="doctors-name">Dr. Ronald Jacobs</div>
            <div class="doctors-position">Oncologist</div>
            </a>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="see-all">
            <a href="doctors.html" class="btn btn-primary see-all-btn">See all Doctors</a>
            </div>
            </div>
            </div>
            </div>
            </section>


            </div>
    </main>
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Location</h4>
                            <div class="about-clinic">
                                <p><strong>Address:</strong>
                                    <br>1603 Old York Rd,
                                    <br>Houma, LA, 75429
                                </p>
                                <p class="m-b-0"><strong>Phone</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                    <br> <strong>Fax</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Sitemap</h4>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Appointment</h4>
                            <div class="appointment-btn">
                              <p>Very Easy To Use, Patient Appointment System</p>
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a href="#" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-12">
                            <div class="copy-text text-center">
                                <p><a href="#">Patient Appointment System</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script>
        $(".toggle-password").click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        })
    </script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/js/theme.js')}}"></script>

</body>

</html>
