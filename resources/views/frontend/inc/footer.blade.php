<footer>
    @php
        $widge_one = is_array(json_decode(settings('widget_one_title'))) ? json_decode(settings('widget_one_title')) : [];
        $widge_one_links = @json_decode(settings('widget_one_link'));

        $widge_two = is_array(json_decode(settings('widget_two_title'))) ? json_decode(settings('widget_two_title')) : [];
        $widge_two_links = @json_decode(settings('widget_two_link'));

        $widge_three = is_array(json_decode(settings('widget_three_title'))) ? json_decode(settings('widget_three_title')) : [];
        $widge_three_links = @json_decode(settings('widget_three_link'));

        $offices = is_array(json_decode(settings('footer_office_title'))) ? json_decode(settings('footer_office_title')) : [];
        $maps = @json_decode(settings('footer_office_map'));
        $phone = @json_decode(settings('footer_office_phone'));
        $addresses = @json_decode(settings('footer_office_address'));
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <img src="{{ asset(settings('site_logo')) }}" alt="Logo">
                <p class="pt-3">
                    {{ settings('footer_description') }}
                </p>
            </div>
            <div class="col-md-2 col-6 m-auto ">
                <h6><b>{{ settings('widget_title_one') }}</b></h6>
                <ul class="mt-3">
                    @foreach ($widge_one as $key => $title)
                    <li class="mb-2"><a href="{{ $widge_one_links[$key] }}" class="nav-link">{{ $title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2 col-6 m-auto">
                <h6><b>{{ settings('widget_title_two') }}</b></h6>
                <ul class="mt-3">
                    @foreach ($widge_two as $key => $title)
                    <li class="mb-2"><a href="{{ $widge_two_links[$key] }}" class="nav-link">{{ $title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2 col-6 m-auto">
                <h6><b>{{ settings('widget_title_three') }}</b></h6>
                <ul class="mt-3">
                    @foreach ($widge_three as $key => $title)
                    <li class="mb-2"><a href="{{ $widge_three_links[$key] }}" class="nav-link">{{ $title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-6 m-auto">
                <h6><b>Payment Method</b></h6>
                <img src="{{ asset(settings('payment_method')) }}" class="img-fluid">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-6 m-auto">
                <h6 class="mb-3"><b>Bangladesh Office</b></h6>
                <select wire:model.live='bangladesh_office' class="form-select">
                    <option value="" selected>Select Location</option>
                    @foreach ($bangladesh_offices as $office)
                    <option value="{{ $office->id }}">{{ $office->title }}</option>
                    @endforeach
                </select>

                @if($bangladesh_office)
                <a href="{{ route('office.address.details',$bangladesh_office) }}" class="btn btn-success mt-2">View Details</a>
                @endif
            </div>
            <div class="col-md-3 col-6 m-auto">
                <h6 class="mb-3"><b>Abroad Office</b></h6>
                <select wire:model.live='abroad_office' class="form-select">
                    <option value="" selected>Select Location</option>
                    @foreach ($abroad_offices as $office)
                    <option value="{{ $office->id }}">{{ $office->title }}</option>
                    @endforeach
                </select>

                @if($abroad_office)
                <a href="{{ route('office.address.details',$abroad_office) }}" class="btn btn-success mt-2">View Details</a>
                @endif
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="copyright ">
                <p> Copyright <i class="fa-regular fa-copyright"></i> {{ date('Y') }} . Shopno Zatra. All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>
