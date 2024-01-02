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
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css?v=2.2">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css?v=2.0">
    @stack('css')
</head>

<body>

    <!-- Nav area start -->

    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <picture>
                        <img src="{{ asset(settings('site_logo')) }}" alt="logo">
                    </picture>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end p-3 p-lg-0" id="navbarSupportedContent">
                    {{-- <div class="nav-search d-flex align-items-center">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search Here">
                    </div> --}}

                    <div class="nav-search input-group">
                        <input type="text" class="form-control" id="searchQuery" placeholder="Search.." aria-label="Search.." value="{{ request('query') }}" aria-describedby="search-btn">
                        <button class="btn btn-outline-success" onclick="redirectToSearch('desktop')" type="button" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

                    <ul class="navbar-nav mb-2 mb-lg-0 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link bg-app text-white me-1" aria-current="page" href="#">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-app text-white me-1" href="{{ route('page.details','about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-app text-white me-1" href="{{ route('news.media') }}">News Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-app text-white me-1" href="{{ route('courses') }}">Courses</a>
                        </li>

                        <li class="nav-item">
                            @auth
                            <a class="nav-link bg-app text-white me-1" href="{{ route('user.my.profile') }}">My Dashboard</a>
                            @else
                            <a class="nav-link bg-app text-white me-1" href="{{ route('partner.login') }}"> Partner Login</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-end p-3 p-lg-0">
                <div class="accordion" id="accordion0">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            @auth
                            <a href="{{ route('user.my.profile') }}" class="accordion-button single-link collapsed" style=".accordion-button::after {}">Inbox</a>
                            @else
                            <a href="{{ route('login') }}" class="accordion-button single-link collapsed">Inbox</a>
                            @endauth
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="{{ route('page.details','about-us') }}" class="accordion-button single-link collapsed">About Us</a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button single-link collapsed">News Media</a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="{{ route('courses') }}" class="accordion-button single-link collapsed">Courses</a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            @auth
                            <a href="{{ route('user.my.profile') }}" class="accordion-button single-link collapsed">My Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="accordion-button single-link collapsed">Log In</a>
                            @endauth
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#touristOffer" aria-controls="touristOffer"> Tourist & Business <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="touristOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\Tourist::all() as $item)
                                <a href="{{ route('tourist.details',$item->id) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#hajjOffer" aria-controls="hajjOffer"> Hajj Visa <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="hajjOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\Hajj::all() as $item)
                                <a href="{{ route('hajj.details',['type' => $item->type,'id' => $item->id]) }}">{{ $item->package_name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#workOffer" aria-controls="workOffer"> Work Visa <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="workOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\WorkVisa::all() as $item)
                                <a href="{{ route('work.visa.details',$item->id) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#educationOffer" aria-controls="educationOffer"> Education Visa <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="educationOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\EducationVisa::all() as $item)
                                <a href="{{ route('education.visa.details',$item->id) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#mediOffer" aria-controls="mediOffer"> Medical Visa <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="mediOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\MedicalVisa::all() as $item)
                                <a href="{{ route('medical.visa.details',$item->id) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#holidayOffer" aria-controls="holidayOffer"> Holiday Package <div class="badge bg-danger ms-2 fa-beat"> Offer</div></a>
                        </h2>
                        <div id="holidayOffer" class="accordion-collapse collapse" data-bs-parent="#accordion0">
                            <div class="accordion-body">
                                @foreach (App\Models\Holiday::all() as $item)
                                <a href="{{ route('holiday.details',$item->id) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Nav area end -->


    <!-- Main content -->
    <section class="main-content">
        {{ $slot }}
    </section>
    <!-- End Main content -->


    <!-- Footer area start -->

    {{-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="extra-links">
                        <ul>
                            <li><a href="{{ route('page.details','about-us') }}"> About Us </a></li>
                            <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                            <li><a href="{{ url('shopnozatra.apk') }}" download>Download App</a></li>
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
                            <p>{{ settings('footer_address') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact d-flex align-items-center">
                            <div class="icons">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p>{{ settings('footer_phone') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact d-flex align-items-center">
                            <div class="icons">
                                <i class="fa-regular fa-envelope-open"></i>
                            </div>
                            <p>{{ settings('footer_email') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6 text-end">
                    <div class="copyright ">
                        <p> Copyright <i class="fa-regular fa-copyright"></i> {{ date('Y') }} . Shopno Zatra. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <livewire:frontend.inc.footer>
    <!-- Footer area end -->

    <div class="extra-btn-top">
        <div class="container btn-container">
            <a href="#"><i class="fa-solid fa-hand-point-up"></i></a>
        </div>
    </div>

    <!-- Javascript area start -->

    <script src="{{ asset('frontend/courses') }}/js/jquery-3.6.0.min.js" data-navigate-track></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js" data-navigate-track></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.nice-select.min.js" data-navigate-track> </script>
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js" data-navigate-track></script>
    <script src="{{ asset('frontend') }}/assets/js/venobox.min.js" data-navigate-track></script>
    <script src="{{ asset('frontend') }}/assets/js/bundle.js" data-navigate-track></script>
    <script src="{{ asset('frontend') }}/assets/js/index.js?v=1.2" data-navigate-track></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" data-navigate-track></script>
    <script>
        function redirectToSearch(from) {
            // Get the input value
            var query = from == 'desktop' ? document.getElementById('searchQuery').value : document.getElementById('searchQueryOne').value;

            // Construct the URL with the input value
            var redirectUrl = '{{ url('search') }}/' + encodeURIComponent(query);

            // Redirect to the URL
            window.location.href = redirectUrl;
        }

    </script>

    @stack('js')

    <!-- Javascript area end -->
</body>

</html>
