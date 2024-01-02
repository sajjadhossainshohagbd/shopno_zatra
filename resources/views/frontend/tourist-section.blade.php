<div class="work-main" id="work">
    <div class="container">
        <div class="heading">
            <div class="row justify-content-between align-items-center">
                <div class="col-8 col-lg-6 col-md-7">
                    <div class="header-left-text">
                        <h3>Visa</h3>
                        <h5>Tourist & Business Offers</h5>
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
            <div class="row">
                <h5>Tourist Visa Request</h5>
                <div class="mt-4 col-6">
                    <select wire:change='setRequestCountry($event.target.value)' class="form-select custom-select">
                        <option value="" selected>Select Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @if($request_country)
                    <a href="{{ route('tourist.visa.request',encrypt($request_country)) }}" class="m-2 btn btn-success text-white"><h6>Tourist Visa Request, Click here.</h6></a>
                    @endif
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
                <div class="mt-4 col-6">
                    <select wire:change='setCountry($event.target.value)' class="form-select custom-select">
                        <option value="" selected>All Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row mt-3 offer-slider">
                    @foreach ($packages as $packe)
                    <div class="col-lg-4">
                        <a href="{{ route('tourist.details',$packe->id) }}">
                            <div class="offer-inner">
                                <div class="offer-image">
                                    <img src="{{ $packe->show_thumbnail }}" alt="offer-image">
                                </div>
                                <div class="offer-text">
                                    <h4>{{ $packe->name }}</h4>
                                    <div class="offer-text-down d-flex justify-content-between align-items-center">
                                        <div class="offer-price">
                                            <p>Price : {{ round($packe->price) }} BDT</p>
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
</div>
