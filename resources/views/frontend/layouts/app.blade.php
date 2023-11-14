<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title ?? 'Home' }} | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/theme-basic.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/theme-glass.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    @stack('css')
</head>

<body>

    <!-- Nav area start -->

    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <picture>
                    <img src="{{ asset('frontend/assets') }}/images/logo.png" alt="logo">
                </picture>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end p-3 p-lg-0" id="navbarSupportedContent">
                <div class="nav-search d-flex align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search Here">
                </div>
                <ul class="navbar-nav mb-2 mb-lg-0 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                    </li>
                </ul>

                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                    <ul class="dropdown-menu">
                        @auth
                        <li> <a class="dropdown-item" href="{{ route('user.my.profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.my.courses') }}">My Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">Log Out</a></li>
                        @else
                        <li> <a class="dropdown-item" href="{{ route('login') }}">Log In</a></li>
                        <li> <a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                        @endauth
                    </ul>
                  </div>

            </div>
        </div>
    </nav>

    <!-- Nav area end -->


    <!-- Main content -->
    <section class="main-content">
        {{ $slot }}
    </section>
    <!-- End Main content -->


    <!-- Footer area start -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="extra-links">
                        <ul>
                            <li><a href="#">Why Choose Us</a></li>
                            <li><a href="#"> About Us </a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Recommendation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="extra-infos">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="contact d-flex align-items-center">
                            <div class="icons">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact d-flex align-items-center">
                            <div class="icons">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p>+8801000000000, +8801000000000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact d-flex align-items-center">
                            <div class="icons">
                                <i class="fa-regular fa-envelope-open"></i>
                            </div>
                            <p>yourmail123@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6 text-end">
                    <div class="copyright ">
                        <p><i class="fa-regular fa-copyright"></i> Copyright 2023 . Shopno Zatra. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer area end -->

    <div class="extra-btn-top">
        <div class="container btn-container">
            <a href="#"><i class="fa-solid fa-hand-point-up"></i></a>
        </div>
    </div>

    <!-- Javascript area start -->

    <script src="{{ asset('frontend/courses') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.nice-select.min.js"> </script>
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/venobox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @stack('js')

    <!-- Javascript area end -->
</body>

</html>
