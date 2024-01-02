<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Search</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach ($hajj_visa as $key => $hajj)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Hajj Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('hajj.details',['type' => $hajj->type ,'id' => $hajj->id]) }}">
                                    <img src="{{ $hajj->show_thumbnail }}" alt="{{ $hajj->package_name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('hajj.details',['type' => $hajj->type ,'id' => $hajj->id]) }}"><h4>{{ $hajj->package_name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($hajj->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($umrah_visa as $key => $umrah)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Umrah Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('hajj.details',['type' => $umrah->type ,'id' => $umrah->id]) }}">
                                    <img src="{{ $umrah->show_thumbnail }}" alt="{{ $umrah->package_name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('hajj.details',['type' => $umrah->type ,'id' => $umrah->id]) }}"><h4>{{ $umrah->package_name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($umrah->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($tourist_visa as $key => $tourist)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Tourist Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('tourist.details',$tourist->id) }}">
                                    <img src="{{ $tourist->show_thumbnail }}" alt="{{ $tourist->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('tourist.details',$tourist->id) }}"><h4>{{ $tourist->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($tourist->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($work_visa as $key => $work)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Work Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('work.visa.details',$work->id) }}">
                                    <img src="{{ $work->show_thumbnail }}" alt="{{ $work->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('work.visa.details',$work->id) }}"><h4>{{ $work->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($work->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($education_visa as $key => $education)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Education Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('education.visa.details',$education->id) }}">
                                    <img src="{{ $education->show_thumbnail }}" alt="{{ $education->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('education.visa.details',$education->id) }}"><h4>{{ $education->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($education->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($medical_visa as $key => $medical)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Medical Visa</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('medical.visa.details',$medical->id) }}">
                                    <img src="{{ $medical->show_thumbnail }}" alt="{{ $medical->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('medical.visa.details',$medical->id) }}"><h4>{{ $medical->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($medical->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($holiday_pack as $key => $holiday)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Holiday Packages</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('medical.visa.details',$holiday->id) }}">
                                    <img src="{{ $holiday->show_thumbnail }}" alt="{{ $holiday->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('medical.visa.details',$holiday->id) }}"><h4>{{ $holiday->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($holiday->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($services as $key => $service)
                        @if($loop->first)
                        <h6 class="bg bg-primary p-1 text-white">Services</h6>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('services.details',$service->id) }}">
                                    <img src="{{ $service->show_thumbnail }}" alt="{{ $service->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('services.details',$service->id) }}"><h4>{{ $service->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($service->description), 50, '...') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
