<div class="hotel-main" id="hotel">
    <div class="container">
        <div class="heading">
            <div class="row justify-content-between align-items-end">
                <div class="col-6 col-lg-7 col-md-7">
                    <div class="header-left-text">
                        <h3>Hotel Booking</h3>
                        {{-- <p>It all boils down to the fact that we understand the “flatness” of our phone screens.
                            Faux 3d elements and real-world textures mentally
                        </p> --}}
                    </div>
                </div>
                <div class="col-4 col-lg-5 col-md-5 mt-lg-0 mt-md-0">
                    <div class="row align-items-lg-center justify-content-end">
                        <div class="col-lg-6">
                            <div class="header-video section-video">
                                <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                                <div class="play-btn">
                                    <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                        data-maxwidth="700px"
                                        href="{{ settings('hotel_video_link') }}">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="extra-btn">
                                <button class="my-video-links" data-autoplay="true" data-vbtype="video"
                                data-maxwidth="700px" href="{{ settings('hotel_video_link') }}">Know More</button>
                            </div>
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

                @foreach ($hotels as $hotel)
                <div class="col-lg-4">
                    <a href="{{ route('hotel.details',$hotel->id) }}">
                        <div class="offer-inner">
                            <div class="offer-image">
                                <img src="{{ $hotel->show_thumbnail }}" alt="offer-image">
                            </div>
                            <div class="offer-text">
                                <h4>{{ $hotel->name }}</h4>
                                <div class="offer-text-down d-flex justify-content-between align-items-center">
                                    <div class="offer-price">
                                        <p>{{ $hotel->price }} BDT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
