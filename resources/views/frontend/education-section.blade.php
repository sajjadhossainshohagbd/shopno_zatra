<div class="edu-main" id="edu">
    <div class="container">
        <div class="heading">
            <div class="row justify-content-between align-items-center">
                <div class="col-8 col-lg-6 col-md-7">
                    <div class="header-left-text">
                        <h3>Education</h3>
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
                                        href="{{ settings('hajj_video_link') }}">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="extra-btn">
                                <button class="my-video-links" data-autoplay="true" data-vbtype="video"
                                data-maxwidth="700px" href="{{ settings('hajj_video_link') }}">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h5>Admission Request</h5>
                <div class="mt-4 col-6">
                    <select wire:change='setRequestCountry($event.target.value)' class="form-select custom-select">
                        <option value="" selected>Select Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @if($request_country)
                    <a href="{{ route('education.visa.job.request',encrypt($request_country)) }}" class="m-2 btn btn-success text-white"><h6>Admission Request, Click here.</h6></a>
                    @endif
                </div>
                <div class="mt-4 col-6">
                    <select wire:change='setService($event.target.value)' class="form-select custom-select">
                        <option value="" selected>Education Related Service</option>
                        @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                    @if($service_id)
                    <a href="{{ route('services.details',$service_id) }}" class="m-2 btn btn-primary text-white"><h6>View Details, Click here.</h6></a>
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
                <div class="work-select">
                    <h3>Programs</h3>
                    <div class="hajj-selector">
                        <ul class="nav nav-pills mb-3">
                            @foreach ($programs as $program)
                            <li class="nav-item" role="presentation" wire:click="switchTab('{{ $program }}')">
                                <button class="nav-link {{ $current_program == $program ? 'active' : '' }}">{{ $program }}</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if($current_program)
                <div class="mt-4 col-6">
                    <select wire:change='setCountry($event.target.value)' class="form-select custom-select">
                        <option value="" selected>All Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>
                @endif

                <div class="row mt-3 offer-slider">
                    @foreach ($educations as $edu)
                    <div class="col-lg-4">
                        <div class="offer-inner">
                            <a href="{{ route('education.visa.details',$edu->id) }}">
                                <div class="offer-image">
                                    <img src="{{ $edu->show_thumbnail }}" alt="offer-image">
                                </div>
                                <div class="offer-text">
                                    <h4>{{ $edu->name }}</h4>
                                    <div class="offer-text-down d-flex justify-content-between align-items-center">
                                        <div class="offer-price">
                                            <p>Price : {{ round($edu->price) }} BDT</p>
                                        </div>
                                        {{-- <div class="offer-duration">
                                            <p>4 Years</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
