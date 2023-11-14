<div>
    @push('js')
        <script>
            // $("select").niceSelect();
        </script>
    @endpush
    <!-- Banner area start -->

    <div class="banner-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="banner-list">
                        <div class="nav flex-column nav-pills me-3" id="videoSection" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($this->sections as $section)
                            <button class="nav-link {{ $loop->index == 0 ? 'active' : '' }}" id="data-{{ $loop->index }}-tab" data-bs-toggle="pill"
                                data-bs-target="#tab-{{ $loop->index }}" type="button" role="tab" aria-controls="tab-{{ $loop->index }}"
                                aria-selected="true"> {{ $section->name }}
                            </button>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 mt-4 mt-lg-0">
                    <div class="banner-infos">
                        <div class="tab-content" id="videoSectionContent">
                            @foreach ($this->sections as $section)
                            <div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }} " id="tab-{{ $loop->index }}" role="tabpanel"
                                aria-labelledby="data-{{ $loop->index }}-tab" tabindex="0">
                                <iframe src="{{ $section->video_url }}" class="w-100" style="height: 350px;" loading="lazy"></iframe>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="need-main">
                <h2>Please Select Your Need</h2>
                <div class="row mt-4 need-slider">
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need1.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Travel</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need2.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Education</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need3.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Working</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need4.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Hotel</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need5.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Hajj</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need6.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Holiday Pack</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need3.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Working</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need4.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Hotel</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need5.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Hajj</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="need-inner">
                            <div class="need-icon">
                                <img src="{{ asset('frontend/assets') }}/images/need6.png" alt="need-icon">
                            </div>
                            <div class="need-text">
                                <h3>Holiday Pack</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner area end -->

    <!-- Ticktes area start -->

    <div class="ticktes-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-between align-items-lg-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-left-text">
                            <h3>Ticket</h3>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 mt-4 mt-lg-0 mt-md-0">
                        <div class="row align-items-lg-center justify-content-end">
                            <div class="col-lg-6">
                                <div class="header-video">
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
                            </div>
                            {{-- <div class="col-lg-5 mt-4 mt-lg-0 mt-md-4">
                                <div class="header-right-text">
                                    <h3>Get More Service</h3>
                                    <div class="nice-select">
                                        <span class="current">Train</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">Bus</li>
                                            <li data-value="2" class="option">Flight</li>
                                            <li data-value="4" class="option">Ship</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticktes area end -->

    <!-- Ticektes selection area start -->

    <div class="ticktes-selection-main">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <div class="selection-main">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">One Way
                                </button>
                                <button class="nav-link" id="nav-round-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-round" type="button" role="tab" aria-controls="nav-round"
                                    aria-selected="false">Round Way
                                </button>
                                <button class="nav-link" id="nav-multi-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-multi" type="button" role="tab" aria-controls="nav-multi"
                                    aria-selected="false">Multi City
                                </button>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="option-main">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="option-panel">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-6">
                                            <div class="fly">
                                                <h3>Flying From</h3>
                                                <div class="nice-select">
                                                    <span class="current">Dhaka</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="fly">
                                                <h3>Flying To</h3>
                                                <div class="nice-select">
                                                    <span class="current">Cox's Bazar</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mt-md-4 mt-lg-0 text-center">
                                            <div class="fly">
                                                <h3>Select Date</h3>
                                                <div class="dates d-flex justify-content-between align-items-center">
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Departure Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Return Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                </div>
                                                <!-- <div id="color-calendar"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 mt-md-4 mt-lg-0">
                                            <div class="fly">
                                                <h3>Passenger & Cabin Class</h3>
                                                <div class="nice-select">
                                                    <span class="current">1 Person</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">1 Person</li>
                                                        <li data-value="2" class="option">1 Person</li>
                                                        <li data-value="4" class="option">1 Person</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-round" role="tabpanel" aria-labelledby="nav-round-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="option-panel">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-6">
                                            <div class="fly">
                                                <h3>Flying From</h3>
                                                <div class="nice-select">
                                                    <span class="current">Dhaka</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="fly">
                                                <h3>Flying To</h3>
                                                <div class="nice-select">
                                                    <span class="current">Cox's Bazar</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mt-md-4 mt-lg-0 text-center">
                                            <div class="fly">
                                                <h3>Select Date</h3>
                                                <div class="dates d-flex justify-content-between align-items-center">
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Departure Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Return Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                </div>
                                                <!-- <div id="color-calendar"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 mt-md-4 mt-lg-0">
                                            <div class="fly">
                                                <h3>Passenger & Cabin Class</h3>
                                                <div class="nice-select">
                                                    <span class="current">1 Person</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">1 Person</li>
                                                        <li data-value="2" class="option">1 Person</li>
                                                        <li data-value="4" class="option">1 Person</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-multi" role="tabpanel" aria-labelledby="nav-multi-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="option-panel">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-6">
                                            <div class="fly">
                                                <h3>Flying From</h3>
                                                <div class="nice-select">
                                                    <span class="current">Dhaka</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="fly">
                                                <h3>Flying To</h3>
                                                <div class="nice-select">
                                                    <span class="current">Cox's Bazar</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Shylet</li>
                                                        <li data-value="2" class="option">Chittagong</li>
                                                        <li data-value="4" class="option">Saidpur</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mt-md-4 mt-lg-0 text-center">
                                            <div class="fly">
                                                <h3>Select Date</h3>
                                                <div class="dates d-flex justify-content-between align-items-center">
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Departure Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                    <div
                                                        class="date-inner d-flex justify-content-between align-items-center">
                                                        <h6>Return Date</h6>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                </div>
                                                <!-- <div id="color-calendar"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 mt-md-4 mt-lg-0">
                                            <div class="fly">
                                                <h3>Passenger & Cabin Class</h3>
                                                <div class="nice-select">
                                                    <span class="current">1 Person</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">1 Person</li>
                                                        <li data-value="2" class="option">1 Person</li>
                                                        <li data-value="4" class="option">1 Person</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center">
                    <div class="ticktes-btn">
                        <button>Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticektes selection area end -->

    <!-- Get Offer area start -->

    <div class="get-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="offer-heding">
                        <h3>Get Offer</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3 offer-slider">
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of01.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of02.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of03.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of01.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of02.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-inner">
                        <div class="offer-image">
                            <img src="{{ asset('frontend/assets') }}/images/of03.png" alt="offer-image">
                        </div>
                        <div class="offer-text">
                            <h4>Biman Bangladesh Airlines</h4>
                            <div class="offer-text-down d-flex justify-content-between align-items-center">
                                <div class="offer-price">
                                    <p>5000 BDT/Person</p>
                                </div>
                                <div class="offer-duration">
                                    <p>2 Hour 35 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Get Offer area end -->

    <!-- Tourist area start -->

    <div class="tourist-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="header-left-text">
                            <h3>Get Tourist and Business Visa Easily</h3>
                            <div class="nice-select">
                                <span class="current">Select Country</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Bangladesh</li>
                                    <li data-value="2" class="option">India</li>
                                    <li data-value="4" class="option">Sudia Arab</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-md-0">
                        <div class="header-video">
                            <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                            <div class="play-btn">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video" data-maxwidth="700px"
                                    href="{{ settings('tourist_video_link') }}">
                                    <i class="fa-solid fa-play">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="extra-btn">
                            <button>Know More Service</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="offer-heading">
                        <h3>Get Offer</h3>
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
    </div>

    <!-- Tourist area end -->

    <!-- Hotel area start -->

    <div class="hotel-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-between align-items-end">
                    <div class="col-12 col-lg-8 col-md-7">
                        <div class="header-left-text">
                            <h3>Hotel Booking</h3>
                            {{-- <p>It all boils down to the fact that we understand the “flatness” of our phone screens.
                                Faux 3d elements and real-world textures mentally
                            </p> --}}
                        </div>
                        <div class="header-checkbox">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    I am Looking For an entire home or apartment
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    I am Traveling For Work
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 mt-5 mt-lg-0 mt-md-0">
                        <div class="header-video">
                            <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                            <div class="play-btn">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video" data-maxwidth="700px"
                                    href="{{ settings('hotel_video_link') }}">
                                    <i class="fa-solid fa-play">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-select">
                <div class="row">
                    <div class="col-lg-2 col-md-6 mb-md-3">
                        <div class="fly">
                            <h3>Where You Going?</h3>
                            <div class="nice-select">
                                <span class="current">Arab Amirates</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Shylet</li>
                                    <li data-value="2" class="option">Chittagong</li>
                                    <li data-value="4" class="option">Saidpur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-md-3 text-center">
                        <div class="fly">
                            <h3>Select Date</h3>
                            <div class="dates d-flex justify-content-between align-items-center">
                                <div class="date-inner d-flex justify-content-between align-items-center">
                                    <h6>Check In Date</h6>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="date-inner d-flex justify-content-between align-items-center">
                                    <h6>Check Out Date</h6>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-3">
                        <div class="fly">
                            <h3>People</h3>
                            <div class="d-flex">
                                <div class="nice-select">
                                    <span class="current">1 Person</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Shylet</li>
                                        <li data-value="2" class="option">Chittagong</li>
                                        <li data-value="4" class="option">Saidpur</li>
                                    </ul>
                                </div>
                                <div class="nice-select">
                                    <span class="current">1 Child</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Shylet</li>
                                        <li data-value="2" class="option">Chittagong</li>
                                        <li data-value="4" class="option">Saidpur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-md-3">
                        <div class="fly">
                            <h3>Room</h3>
                            <div class="nice-select">
                                <span class="current">1 Room</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Shylet</li>
                                    <li data-value="2" class="option">Chittagong</li>
                                    <li data-value="4" class="option">Saidpur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 offset-md-5 col-lg-1 offset-lg-0">
                        <div class="hotel-btn">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-offer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="offer-heding">
                            <h3>Get Offer</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 offer-slider">
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of05.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of06.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of07.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of05.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of06.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ asset('frontend/assets') }}/images/of07.png" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>Sea Pearl Beach Resort & Spa Cox's Bazar</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>50000 BDT/Person</p>
                                    </div>
                                    <div class="offer-duration">
                                        <p>Price includes VAT & Tax</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Visa Check area start -->

    <div class="visa-check-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-6">
                    <div class="visa-check-left">
                        <h6>Visa Check</h6>
                        <h3>Check Your Visa Today With Passport Number</h3>
                        {{-- <p>It all boils down to the fact that we understand the “flatness” of our phone screens. Faux 3d
                            elements and real-world textures mentally down to the fact that we understand the “flatness”
                            of our phone screens. Faux 3d elements down to the fact that we understand the “flatness” of
                            our phone screens. Faux 3d elements</p> --}}
                        <div class="nice-select">
                            <span class="current">Select Country</span>
                            <ul class="list">
                                <li data-value="1" class="option">Bangladesh</li>
                                <li data-value="2" class="option">India</li>
                                <li data-value="4" class="option">Sudia Arab</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
                    <div class="extra-btn">
                        <button>Know More Service</button>
                    </div>
                    <div class="header-video">
                        <img src="{{ asset('frontend/assets') }}/images/visa.png" alt="header-pic">
                        <div class="play-btn">
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video" data-maxwidth="700px"
                                href="https://youtu.be/Dex0hq46MwI?si=ueClauoB1t4fyhzN">
                                <i class="fa-solid fa-play">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visa Check area end -->

    <!-- CV area start -->

    <div class="cv-main">
        <div class="container">
            <div class="heading">
                <div class="col-lg-4 col-md-4">
                    <div class="header-left-text">
                        <h3>CV</h3>
                        <div class="nice-select">
                            <span class="current">Select Country</span>
                            <ul class="list">
                                <li data-value="1" class="option">Bangladesh</li>
                                <li data-value="2" class="option">India</li>
                                <li data-value="4" class="option">Sudia Arab</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-select">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="nice-select">
                            <span class="current">School CV</span>
                            <ul class="list">
                                <li data-value="1" class="option">Bangladesh</li>
                                <li data-value="2" class="option">India</li>
                                <li data-value="4" class="option">Sudia Arab</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="nice-select">
                            <span class="current">Collage CV</span>
                            <ul class="list">
                                <li data-value="1" class="option">Bangladesh</li>
                                <li data-value="2" class="option">India</li>
                                <li data-value="4" class="option">Sudia Arab</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="nice-select">
                            <span class="current">Job CV</span>
                            <ul class="list">
                                <li data-value="1" class="option">Bangladesh</li>
                                <li data-value="2" class="option">India</li>
                                <li data-value="4" class="option">Sudia Arab</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-0 mt-lg-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cv-left">
                        <img src="{{ asset('frontend/assets') }}/images/cv.png" alt="cv">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="cv-right">
                        <h3>Grab Your Opportunity With Perfect CV</h3>
                        <p>When the first iPhone launched, the idea of interacting with a small device using multi-touch
                            gestures was quite new. To make people more comfortable with the interface, the initial
                            designs used Skeuomorphism for the UI.
                        </p>
                        <p>When the first iPhone launched, the idea of interacting with a small device using
                            multi-touch gestures was quite new. To make people more comfortable with the interface, the
                            initial designs used Skeuomorphism for the UI
                        </p>
                        <div class="buttons">
                            <button>Apply For CV</button>
                            <button>Know More Service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CV area end -->

    <!-- Balance area start -->

    <div class="balance-main">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-left-text">
                            <h3>Abroad to Abroad Balance Transfer For Emergency</h3>
                            <p>It all boils down to the fact that we understand the “flatness” of our phone screens.
                                Faux 3d elements and real-world textures mentally down to the fact that we understand
                            </p>
                        </div>
                        <div class="buttons">
                            <button>My Balance Transfer</button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="balance-right buttons">
                            <button>Login/Sign Up</button>
                            <button><i class="fa-regular fa-circle-play"></i> Know Information</button>
                            <button>Help</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Balance area end -->

    <!-- Banner 2 area start -->

    <div class="banner2-main">
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
                        <button>Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner 2 area end -->
</div>
