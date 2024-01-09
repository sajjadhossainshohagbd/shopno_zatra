<div>
    <!-- Banner area start -->
    <div class="mx-3 d-md-none">
        {{-- <div class="nav-search w-100 d-flex align-items-center mb-3 mt-3 ">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search Here">
        </div> --}}

        <div class="nav-search w-100 input-group mb-3 mt-3">
            <input type="text" class="form-control" id="searchQueryOne" placeholder="Search.." aria-label="Search.." value="{{ request('query') }}" aria-describedby="search-btn">
            <button class="btn btn-outline-success" onclick="redirectToSearch('mobile')" type="button" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

    </div>

    <div class="banner-main">
        <div class="container">
            <div class="row">
                <div class="col-3 col-lg-2 col-md-3">
                    <div class="banner-list">
                        <div class="nav flex-column nav-pills me-3" id="videoSection" role="tablist"
                            aria-orientation="vertical">

                            <button class="nav-link" id="data-login-tab" data-bs-toggle="pill" data-bs-target="#tab-login" type="button" role="tab" aria-selected="true">
                                Log In
                            </button>

                            <button class="nav-link active" id="data-home-tab" data-bs-toggle="pill" data-bs-target="#tab-home" type="button" role="tab" aria-selected="true">
                                Home
                            </button>

                            <button class="nav-link" id="data-service-tab" data-bs-toggle="pill" data-bs-target="#tab-service" type="button" role="tab" aria-selected="true">
                                Services
                            </button>

                            <button class="nav-link" id="data-payment-tab" data-bs-toggle="pill" data-bs-target="#tab-payment" type="button" role="tab" aria-selected="true">
                                Payment
                            </button>

                            <button class="nav-link" id="data-contact-tab" data-bs-toggle="pill" data-bs-target="#tab-contact" type="button" role="tab" aria-selected="true">
                                Contact
                            </button>

                            <button class="nav-link" id="data-offer-tab" data-bs-toggle="pill"
                                data-bs-target="#tab-offer" type="button" role="tab" aria-controls="tab-offer"
                                aria-selected="true">
                                Offers <span class="badge bg-danger fa-beat">({{ $offer_count }})</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-lg-10 col-md-9 mt-lg-0">
                    <div class="tab-content" id="videoSectionContent">
                        <div class="tab-pane fade" id="tab-login" role="tabpanel"
                            aria-labelledby="data-login-tab" tabindex="0">
                            <livewire:auth.section-login>
                        </div>
                        <div class="tab-pane fade show active" id="tab-home" role="tabpanel"
                            aria-labelledby="data-home-tab" tabindex="0">
                            <iframe src="{{ generateVideoEmbedUrl(settings('home_video_link')) }}" class="w-100 iframe-video" loading="lazy" allowfullscreen frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade" id="tab-service" role="tabpanel"
                            aria-labelledby="data-service-tab" tabindex="0">
                            <div class="row bg-white p-3 services">
                                @php
                                    $titles = is_array(json_decode(settings('header_services_title'))) ? json_decode(settings('header_services_title')) : [];
                                    $icons = @json_decode(settings('header_services_logo'));
                                    $url = @json_decode(settings('header_services_url'));
                                @endphp
                                @foreach ($titles as $key => $title)
                                <div class="col-4 col-md-3">
                                    <a href="{{ @$url[$key] }}">
                                        <div class="text-center text-black">
                                            <img src="{{ asset(@$icons[$key]) }}" alt="{{ $title }} Services" class="img-fluid service-icon" width="100">
                                            <h6>{{ $title }}</h6>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-payment" role="tabpanel"
                            aria-labelledby="data-payment-tab" tabindex="0">
                            <div class="bg-white p-2">
                                @php
                                    $titles = is_array(json_decode(settings('header_button_title'))) ? json_decode(settings('header_button_title')) : [];
                                    $url = @json_decode(settings('header_button_url'));
                                @endphp
                                <div class="row">
                                    @foreach ($titles as $key => $name)
                                    <div class="col-md-4 text-center">
                                        <a href="{{ $url[$key] }}" class="btn bg-app text-white mb-2">{{ $name }}</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-contact" role="tabpanel"
                            aria-labelledby="data-contact-tab" tabindex="0">
                            <div class="bg-white text-center">
                                <h4 class="mb-2 mt-2">Contact Us</h4>
                                <hr>
                                <a href="{{ settings('fb_link') }}"><i class="fa-brands fa-facebook fa-4x m-2 text-info"></i></a>
                                <a href="{{ settings('youtube_link') }}"><i class="fa-brands fa-youtube fa-4x text-danger m-2"></i></a>
                                <a href="{{ settings('instagram_link') }}"><i class="fa-brands fa-instagram fa-4x m-2 text-secondary"></i></a>
                                <a href="{{ settings('twitter_link') }}"><i class="fa-brands fa-twitter fa-4x m-2 text-info"></i></a>
                                <a href="{{ settings('whatsapp_link') }}"><i class="fa-brands fa-whatsapp fa-4x m-2 text-success"></i></a>
                                <a href="{{ settings('linkedin_link') }}"><i class="fa-brands fa-linkedin fa-4x m-2 text-primary"></i></a>
                                <a href="{{ settings('footer_phone') }}"><i class="fa-solid fa-phone-volume fa-4x m-2 text-success"></i></a>
                                <a href="mailto:{{ settings('footer_email') }}"><i class="fa-solid fa-envelope fa-4x m-2 text-secondary"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-offer" role="tabpanel"
                            aria-labelledby="data-offer-tab" tabindex="0">
                            <div class="row bg-white p-3">
                                @php
                                    $offer_titles = is_array(json_decode(settings('header_offers_title'))) ? json_decode(settings('header_offers_title')) : [];
                                    $offer_icons = @json_decode(settings('header_offers_logo'));
                                    $offer_url = @json_decode(settings('header_offers_url'));
                                @endphp
                                @foreach ($offer_titles as $key => $title)
                                <div class="col-4 col-md-3">
                                    <a href="{{ @$offer_url[$key] }}">
                                        <div class="text-center text-black">
                                            <img src="{{ asset(@$offer_icons[$key]) }}" alt="{{ $title }} Offers" class="img-fluid service-icon" width="100">
                                            <h6>{{ $title }}</h6>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="need-main">
                <h2 class="text-center">Please Select Your Need</h2>
                <div class="row mt-4 need-slider">
                    <div class="col-lg-2">
                        <div >
                            <a href="#ticket" class="need-inner">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need1.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Travel</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#edu">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need2.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Education</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#work">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need3.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Working</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#hotel">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need4.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Hotel</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#hajj">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need5.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Hajj</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#medical">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need4.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Medical</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <a href="#holiday">
                                <div class="need-icon">
                                    <img src="{{ asset('frontend/assets') }}/images/need6.png" alt="need-icon">
                                </div>
                                <div class="need-text text-black">
                                    <h3>Holiday Package</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner area end -->

    <!-- Ticktes area start -->

    <div class="ticktes-main" id="ticket">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-end align-items-baseline">
                    <div class="col-6 col-lg-7 col-md-7">
                        <div class="header-left-text">
                            <h3>Ticket</h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-5 col-md-5 mt-lg-0 mt-md-0">
                        <div class="row align-items-lg-center justify-content-end">
                            <div class="col-lg-6">
                                <div class="header-video section-video">
                                    <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                                    <div class="play-btn">
                                        <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                            data-maxwidth="700px"
                                            href="{{ settings('ticket_video_link') }}">
                                            <i class="fa-solid fa-play">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="extra-btn">
                                    <button class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    data-maxwidth="700px" href="{{ settings('ticket_video_link') }}">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticktes area end -->

    <!-- Get Offer area start -->

    <livewire:frontend.ticket-section lazy="on-load"/>

    <!-- Get Offer area end -->

    <!-- Tourist area start -->

    {{-- <div class="tourist-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-baseline align-items-center">
                    <div class="col-6 col-lg-7 col-md-6">
                        <div class="header-left-text">
                            <h3> Visa</h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-5 col-md-6 mt-lg-0 mt-md-0 ms-auto">
                        <div class="row align-items-lg-center justify-content-end">
                            <div class="col-lg-6">
                                <div class="header-video section-video">
                                    <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                                    <div class="play-btn">
                                        <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                            data-maxwidth="700px"
                                            href="{{ settings('tourist_video_link') }}">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="extra-btn">
                                    <button class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    data-maxwidth="700px" href="{{ settings('tourist_video_link') }}">Know More</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="offer-heading">
                        <h3>Tourist & Business Offers</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3 align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of04.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Bangkok: where tradition meets The future</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>50000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>15 Days 14 Night </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-lg-1">
                    <div class="tourist-right text-center">
                        <div class="fly">
                            <h3>Select Date</h3>
                            <div class="dates d-flex justify-content-between align-items-center">
                                <div class="date-inner d-flex justify-content-between align-items-center">
                                    <h6>Departure Date</h6>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="date-inner d-flex justify-content-between align-items-center">
                                    <h6>Return Date</h6>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                            </div>
                            <!-- <div id="color-calendar"></div> -->
                        </div>
                        <div class="happen-main d-flex justify-content-between align-items-center">
                            <div class="happen-inner d-flex align-items-center">
                                <p>How it will happen</p>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="happen-inner">
                                <p>To</p>
                            </div>
                            <div class="happen-inner d-flex align-items-center">
                                <p>How it will happen</p>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <livewire:frontend.tourist-section lazy="on-load"/>

    <!-- Tourist area end -->

    <!-- Hotel area start -->

    <livewire:frontend.hotel-booking-section lazy="on-load"/>

    <!-- Hotel area end -->

    <!-- Work area start -->

    <livewire:frontend.work-visa-section lazy="on-load"/>

    <!-- Work area end -->

    <!-- Hajj area start -->

    <livewire:frontend.hajj-section lazy="on-load"/>

    <!-- Hajj area end -->

    <!-- Education area start -->
    <livewire:frontend.education-section lazy="on-load"/>
    <!-- Education area end -->

    <!-- Medical area start -->
    <livewire:frontend.medical-section lazy="on-load"/>
    <!-- Medical area end -->

    <!-- Holiday area start -->
    <livewire:frontend.holiday-section lazy="on-load"/>
    <!-- Holiday area end -->

    <!-- CV area start -->

    <div class="cv-main">
        <div class="container">
            <div class="heading">
                <div class="col-lg-4 col-md-4">
                    <div class="header-left-text">
                        <h3>CV</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-0 mt-lg-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cv-left">
                        <img src="{{ asset(settings('cv_preview_image')) }}" alt="cv">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="cv-right">
                        <h3>{{ settings('cv_title') }}</h3>
                        <p>
                            {{ settings('cv_description') }}
                        </p>
                        <div class="buttons">
                            <button onclick="location.href='{{ settings('cv_btn_one_url') }}'">{{ settings('cv_btn_one_title') }}</button>
                            <button onclick="location.href='{{ settings('cv_btn_two_url') }}'">{{ settings('cv_btn_two_title') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CV area end -->

    <!-- Balance area start -->

    <div class="banner2-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-left-text">
                            <h3 class="text-white">Abroad to Abroad Balance Transfer For Emergency</h3>
                        </div>
                        <div class="buttons pt-2">
                            <button onclick="location.href='{{ route('user.balance.transfer') }}'">My Balance Transfer</button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="balance-right buttons">
                            <button onclick="location.href='{{ route('login') }}'">Login/Sign Up</button>
                            <button onclick="location.href='{{ route('contact.us') }}'">Help</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Balance area end -->

    <!-- Banner 2 area start -->

    {{-- <div class="banner2-main">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="banner2-left">
                        <h3>Let’s Contact Us For Any Inquiry</h3>
                        <p>It all boils down to the fact that we understand the “flatness” of our phone screens. Faux 3d
                            elements and real-world textures mentally clash with that flatness creating some dissonance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 text-end">
                    <div class="buttons">
                        <button onclick="window.location='{{ route('contact.us') }}'">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Banner 2 area end -->
</div>
