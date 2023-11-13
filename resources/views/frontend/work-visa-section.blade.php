<div class="work-main">
    <div class="container">
        <div class="heading">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="header-left-text">
                        <h3>Work Visa</h3>
                        {{-- <p>It all boils down to the fact that we understand the “flatness” of our phone screens.
                            Faux 3d elements and real-world textures mentally</p> --}}
                        <div class="row">
                            <div class="mt-4 col-6">
                                <select wire:change='setCountry($event.target.value)' class="form-select custom-select">
                                    <option value="" selected>Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4 col-6">
                                <select wire:change='setService($event.target.value)' class="form-select custom-select">
                                    <option value="" selected>Work Related Service</option>
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
                </div>
                <div class="col-lg-3 col-md-5 mt-4 mt-lg-0">
                    <div class="header-video">
                        <img src="{{ asset('frontend/assets') }}/images/header-pic01.png" alt="header-pic">
                        <div class="play-btn">
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video" data-maxwidth="700px"
                                href="https://youtu.be/Dex0hq46MwI?si=ueClauoB1t4fyhzN">
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
        <div class="hajj-selector">
            <ul class="nav nav-pills mb-3">
                @foreach ($categories as $category)
                <li class="nav-item" role="presentation" wire:click="switchTab('{{ $category }}')">
                    <button class="nav-link {{ $current_category == $category ? 'active' : '' }}">{{ $category }}</button>
                </li>
                @endforeach
            </ul>
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
                    @foreach ($works as $work)
                    <div class="col-lg-4">
                        <a href="{{ route('work.visa.details',$work->id) }}">
                            <div class="offer-inner">
                                <div class="offer-image">
                                    <img src="{{ $work->show_thumbnail }}" alt="offer-image">
                                </div>
                                <div class="offer-text">
                                    <h4>{{ $work->name }}</h4>
                                    <div class="offer-text-down d-flex justify-content-between align-items-center">
                                        <div class="offer-price">
                                            <p>Start From {{ round($work->price) }} BDT</p>
                                        </div>
                                        <div class="offer-duration">
                                            <p>Process In {{ $work->process_days }} Days</p>
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
