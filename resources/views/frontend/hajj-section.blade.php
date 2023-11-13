<div class="hajj-main">
    <div class="container">
        <div class="heading">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="header-left-text">
                        <h3>Hajj Visa</h3>
                        {{-- <p>
                            It all boils down to the fact that we understand the “flatness” of our phone screens.
                            Faux 3d elements and real-world textures mentally
                        </p> --}}
                        <div class="mt-4">
                            <select class="form-select custom-select" wire:change='setService($event.target.value)'>
                                <option value="">Our Hajj Services</option>
                                @foreach ($hajj_services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @if($serviceId)
                            <a href="{{ route('services.details',$serviceId) }}" class="m-2 btn btn-primary text-white"><h6>View Details, Click here.</h6></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mt-4 mt-lg-0 mt-md-0">
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
            <div class="row">
                <div class="col-lg-4">
                    <h3>Category</h3>
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item" role="presentation" wire:click="switchHajjTab('umrah')">
                            <button class="nav-link {{ $hajjTab == 'umrah' ? 'active' : '' }}">Umrah</button>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="switchHajjTab('hajj')">
                            <button class="nav-link {{ $hajjTab == 'hajj' ? 'active' : '' }}">Hajj</button>
                        </li>
                    </ul>
                    {{-- @class(['nav-link', 'active' => $hajjTab == 'hajj']) --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div @class(['tab-pane fade','show active' => $hajjTab == 'umrah']) tabindex="0">
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
                                        @foreach ($umrah as $umra)
                                        <div class="col-lg-4">
                                            <a href="{{ route('hajj.details',['type' => 'umrah','id' => $umra->id]) }}">
                                                <div class="offer-inner">
                                                    <div class="offer-image">
                                                        <img src="{{ $umra->show_thumbnail }}" alt="offer-image">
                                                    </div>
                                                    <div class="offer-text">
                                                        <h4>{{ $umra->package_name }}</h4>
                                                        <div
                                                            class="offer-text-down d-flex justify-content-between align-items-center">
                                                            <div class="offer-price">
                                                                <p>{{ round($umra->start_from) }} BDT/Start From</p>
                                                            </div>
                                                            {{-- <div class="offer-duration">
                                                                <p>15 Days 14 Night </p>
                                                            </div> --}}
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
                        <div @class(['tab-pane fade','show active' => $hajjTab == 'hajj']) tabindex="0">
                            <div class="get-offer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="offer-heding">
                                                <h3>Get Offer</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        @foreach ($hajj as $haj)
                                        <div class="col-lg-4">
                                            <a href="{{ route('hajj.details',['type' => 'hajj','id' => $haj->id]) }}">
                                                <div class="offer-inner">
                                                    <div class="offer-image">
                                                        <img src="{{ $haj->show_thumbnail }}" alt="offer-image">
                                                    </div>
                                                    <div class="offer-text">
                                                        <h4>{{ $haj->package_name }}</h4>
                                                        <div
                                                            class="offer-text-down d-flex justify-content-between align-items-center">
                                                            <div class="offer-price">
                                                                <p>Start From {{ round($haj->start_from) }} BDT</p>
                                                            </div>
                                                            {{-- <div class="offer-duration">
                                                                <p>15 Days 14 Night </p>
                                                            </div> --}}
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
                </div>
            </div>
        </div>
    </div>
</div>
