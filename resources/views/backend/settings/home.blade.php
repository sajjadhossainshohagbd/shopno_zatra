<div>
    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h4 class="text-center">Site Settings</h4>

        <div class="mb-3">
            <label>Site Logo</label>
            <input type="hidden" name="settings[]" value="site_logo">
            <input type="file" class="form-control" name="site_logo" value="{{ settings('site_logo') }}">
            @if(file_exists(public_path(settings('site_logo'))))
            <img src="{{ asset(settings('site_logo')) }}" class="img-thumbnail mt-2">
            @endif
        </div>

        <h4 class="pt-3">Offers</h4>
        <input type="hidden" name="settings[]" value="header_offers_title">
        <input type="hidden" name="settings[]" value="header_offers_logo">
        <input type="hidden" name="settings[]" value="header_offers_url">
        @php
            $titles = is_array(json_decode(settings('header_offers_title'))) ? json_decode(settings('header_offers_title')) : [];
            $icons = @json_decode(settings('header_offers_logo'));
            $url = @json_decode(settings('header_offers_url'));
        @endphp
        <div class="add-offers">
            @foreach ($titles as $key => $title)
            <div class="row">
                <div class="col-3">
                    <label class="form-label"> Name</label>
                    <div class="input-group">
                        <input id="header_offers_title" name="header_offers_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off" value="{{ $title }}">
                    </div>
                </div>
                <div class="col-3">
                    <label class="form-label"> Icon</label>
                    <div class="input-group">
                        <input id="header_offers_logo" name="header_offers_logo[]" class="form-control"
                            type="file">
                    </div>
                </div>
                <div class="col-3">
                    <label class="form-label">URL</label>
                    <div class="input-group">
                        <input id="header_offers_url" name="header_offers_url[]" class="form-control"
                            type="text" placeholder="Link" autocomplete="off" value="{{ @$url[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group mt-2">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-3">
                    <label class="form-label"> Name</label>
                    <div class="input-group">
                        <input id="header_offers_title" name="header_offers_title[]" class="form-control"
                            type="text" placeholder="Name" autocomplete="off">
                    </div>
                </div>
                <div class="col-3">
                    <label class="form-label"> Icon</label>
                    <div class="input-group">
                        <input id="header_offers_logo" name="header_offers_logo[]" class="form-control"
                            type="file">
                    </div>
                </div>
                <div class="col-3">
                    <label class="form-label">URL</label>
                    <div class="input-group">
                        <input id="header_offers_url" name="header_offers_url[]" class="form-control"
                            type="text" placeholder="Link" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-offers"><i class="fa fa-plus"></i> Add More</button>
        </div>

        <h4 class="pt-3">Payment Section </h4>
        <input type="hidden" name="settings[]" value="header_button_title">
        <input type="hidden" name="settings[]" value="header_button_url">
        @php
            $titles = is_array(json_decode(settings('header_button_title'))) ? json_decode(settings('header_button_title')) : [];
            $url = @json_decode(settings('header_button_url'));
        @endphp
        <div class="add-payment-btn">
            @foreach ($titles as $key => $title)
            <div class="row">
                <div class="col-5">
                    <label class="form-label"> Name</label>
                    <div class="input-group">
                        <input id="header_button_title" name="header_button_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off" value="{{ $title }}">
                    </div>
                </div>
                <div class="col-5">
                    <label class="form-label">URL</label>
                    <div class="input-group">
                        <input id="header_button_url" name="header_button_url[]" class="form-control"
                            type="text" placeholder="Link" autocomplete="off" value="{{ @$url[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group mt-2">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-5">
                    <label class="form-label"> Button Name</label>
                    <div class="input-group">
                        <input id="header_button_title" name="header_button_title[]" class="form-control"
                            type="text" placeholder="Button Name" autocomplete="off">
                    </div>
                </div>
                <div class="col-5">
                    <label class="form-label">URL</label>
                    <div class="input-group">
                        <input id="header_button_url" name="header_button_url[]" class="form-control"
                            type="text" placeholder="Button URL" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-payment-btn"><i class="fa fa-plus"></i> Add More</button>
        </div>

        <h4 class="text-center">Section Wise Video Link</h4>
        <div class="accordion" id="sectionAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome" aria-expanded="false" aria-controls="collapseHome"> Home Section </button>
                </h2>
                <div id="collapseHome" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Home Video Link</label>
                        <input type="hidden" name="settings[]" value="home_video_link">
                        <input type="text" class="form-control" name="home_video_link" value="{{ settings('home_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Ticket Section </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Ticket Video Link</label>
                        <input type="hidden" name="settings[]" value="ticket_video_link">
                        <input type="text" class="form-control" name="ticket_video_link" value="{{ settings('ticket_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Tourist Section </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Tourist & Business Video Link</label>
                        <input type="hidden" name="settings[]" value="tourist_video_link">
                        <input type="text" class="form-control" name="tourist_video_link"  value="{{ settings('tourist_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Hotel Section </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Hotel Booking Video Link</label>
                        <input type="hidden" name="settings[]" value="hotel_video_link">
                        <input type="text" class="form-control" name="hotel_video_link"  value="{{ settings('hotel_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Hajj Visa Section </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Hajj Visa Video Link</label>
                        <input type="hidden" name="settings[]" value="hajj_video_link">
                        <input type="text" class="form-control" name="hajj_video_link"  value="{{ settings('hajj_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> Education Visa Section </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Education Visa Video Link</label>
                        <input type="hidden" name="settings[]" value="education_video_link">
                        <input type="text" class="form-control" name="education_video_link"  value="{{ settings('education_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> Medical Visa Section </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Medical Visa Video Link</label>
                        <input type="hidden" name="settings[]" value="medical_video_link">
                        <input type="text" class="form-control" name="medical_video_link"  value="{{ settings('medical_video_link') }}">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> Holiday Pack Section </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Holiday Package Video Link</label>
                        <input type="hidden" name="settings[]" value="holiday_video_link">
                        <input type="text" class="form-control" name="holiday_video_link"  value="{{ settings('holiday_video_link') }}">
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-center">Footer</h4>
        <div class="mb-2">
            <label>Description</label>
            <input type="hidden" name="settings[]" value="footer_description">
            <textarea name="footer_description" class="form-control" rows="3">{{ settings('footer_description') }}</textarea>
        </div>

        <div class="row">
            <div class="col-4">
                <label class="form-label">Widget One Title</label>
                <input type="hidden" name="settings[]" value="widget_title_one">
                <div class="input-group">
                    <input id="widget_title_one" name="widget_title_one" class="form-control"
                        type="text" placeholder="Title" autocomplete="off" value="{{ settings('widget_title_one') }}">
                </div>
            </div>
            <div class="col-4">
                <label class="form-label">Widget Two Title</label>
                <input type="hidden" name="settings[]" value="widget_title_two">
                <div class="input-group">
                    <input id="widget_title_two" name="widget_title_two" class="form-control"
                        type="text" placeholder="Title" autocomplete="off" value="{{ settings('widget_title_two') }}">
                </div>
            </div>
            <div class="col-4">
                <label class="form-label">Widget Three Title</label>
                <input type="hidden" name="settings[]" value="widget_title_three">
                <div class="input-group">
                    <input id="widget_title_three" name="widget_title_three" class="form-control"
                        type="text" placeholder="Title" autocomplete="off" value="{{ settings('widget_title_three') }}">
                </div>
            </div>
        </div>
        <div class="border-bottom p-2"></div>
        <h4 class="pt-3">Widget One</h4>
        <input type="hidden" name="settings[]" value="widget_one_title">
        <input type="hidden" name="settings[]" value="widget_one_link">
        @php
            $widge_one = is_array(json_decode(settings('widget_one_title'))) ? json_decode(settings('widget_one_title')) : [];
            $widge_one_links = @json_decode(settings('widget_one_link'));
        @endphp
        <div class="add-widget-one">
            @foreach ($widge_one as $key => $title)
            <div class="row">
                <div class="col-4">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_one_title" name="widget_one_title[]" class="form-control"
                            type="text" placeholder="Title" value="{{ $title }}" autocomplete="off">
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_one_link" name="widget_one_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off" value="{{ $widge_one_links[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-5">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_one_title" name="widget_one_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off">
                    </div>
                </div>
                <div class="col-5">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_one_link" name="widget_one_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-widget-one"><i class="fa fa-plus"></i> Add More</button>
        </div>
        <div class="border-bottom p-2"></div>
        <h4 class="pt-3">Widget Two</h4>
        <input type="hidden" name="settings[]" value="widget_two_title">
        <input type="hidden" name="settings[]" value="widget_two_link">
        @php
            $widge_two = is_array(json_decode(settings('widget_two_title'))) ? json_decode(settings('widget_two_title')) : [];
            $widge_two_links = @json_decode(settings('widget_two_link'));
        @endphp
        <div class="add-widget-two">
            @foreach ($widge_two as $key => $title)
            <div class="row">
                <div class="col-4">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_two_title" name="widget_two_title[]" class="form-control"
                            type="text" placeholder="Title" value="{{ $title }}" autocomplete="off">
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_two_link" name="widget_two_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off" value="{{ $widge_two_links[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-5">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_two_title" name="widget_two_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off">
                    </div>
                </div>
                <div class="col-5">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_two_link" name="widget_two_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-widget-two"><i class="fa fa-plus"></i> Add More</button>
        </div>
        <div class="border-bottom p-2"></div>
        <h4 class="pt-3">Widget Three</h4>
        <input type="hidden" name="settings[]" value="widget_three_title">
        <input type="hidden" name="settings[]" value="widget_three_link">
        @php
            $widge_three = is_array(json_decode(settings('widget_three_title'))) ? json_decode(settings('widget_three_title')) : [];
            $widge_three_links = @json_decode(settings('widget_three_link'));
        @endphp
        <div class="add-widget-three">
            @foreach ($widge_three as $key => $title)
            <div class="row">
                <div class="col-4">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_three_title" name="widget_three_title[]" class="form-control"
                            type="text" placeholder="Title" value="{{ $title }}" autocomplete="off">
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_three_link" name="widget_three_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off" value="{{ @$widge_three_links[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-5">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="widget_three_title" name="widget_three_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off">
                    </div>
                </div>
                <div class="col-5">
                    <label class="form-label"> URL</label>
                    <div class="input-group">
                        <input id="widget_three_link" name="widget_three_link[]" class="form-control"
                            type="text" placeholder="URL" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-widget-three"><i class="fa fa-plus"></i> Add More</button>
        </div>
        {{-- <div class="border-bottom p-2"></div>
        <h4 class="pt-3">Office Address</h4>
        <input type="hidden" name="settings[]" value="footer_office_phone">
        <input type="hidden" name="settings[]" value="footer_office_title">
        <input type="hidden" name="settings[]" value="footer_office_address">
        <input type="hidden" name="settings[]" value="footer_office_map">
        @php
            $offices = is_array(json_decode(settings('footer_office_title'))) ? json_decode(settings('footer_office_title')) : [];
            $maps = @json_decode(settings('footer_office_map'));
            $phone = @json_decode(settings('footer_office_phone'));
            $addresses = @json_decode(settings('footer_office_address'));
        @endphp
        <div class="add-office">
            @foreach ($offices as $key => $title)
            <div class="row">
                <div class="col-2">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="footer_office_title" name="footer_office_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off" value="{{ @$title }}">
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label"> Address</label>
                    <div class="input-group">
                        <input id="footer_office_address" name="footer_office_address[]" class="form-control"
                            type="text" placeholder="Description" autocomplete="off" value="{{ @$addresses[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label"> Phone</label>
                    <div class="input-group">
                        <input id="footer_office_phone" name="footer_office_phone[]" class="form-control"
                            type="text" placeholder="Phone" autocomplete="off" value="{{ @$phone[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label"> Map Link</label>
                    <div class="input-group">
                        <input id="footer_office_map" name="footer_office_map[]" class="form-control"
                            type="text" placeholder="Link" autocomplete="off" value="{{ @$maps[$key] }}">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="input-group">
            <button type="button" data-toggle="add-more" data-content='
            <div class="row">
                <div class="col-2">
                    <label class="form-label"> Title</label>
                    <div class="input-group">
                        <input id="footer_office_title" name="footer_office_title[]" class="form-control"
                            type="text" placeholder="Title" autocomplete="off">
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label"> Details</label>
                    <div class="input-group">
                        <input id="footer_showroom_address" name="footer_showroom_address[]" class="form-control"
                            type="text" placeholder="Description" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label"> Phone</label>
                    <div class="input-group">
                        <input id="footer_showroom_phone" name="footer_showroom_phone[]" class="form-control"
                            type="text" placeholder="Phone" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label"> Map Link</label>
                    <div class="input-group">
                        <input id="footer_showroom_map" name="footer_showroom_map[]" class="form-control"
                            type="text" placeholder="Link" autocomplete="off">
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Remove</label> <br>
                    <button type="button" data-toggle="remove-parent" data-parent=".row" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            ' class="btn btn-success" data-target=".add-office"><i class="fa fa-plus"></i> Add More</button>
        </div> --}}

        <div class="mb-3">
            <label>Payment Method</label>
            <input type="hidden" name="settings[]" value="payment_method">
            <input type="file" class="form-control" name="payment_method" value="{{ settings('payment_method') }}">
            @if(file_exists(public_path(settings('payment_method'))))
            <img src="{{ asset(settings('payment_method')) }}" class="img-thumbnail mt-2 img-fluid" width="200">
            @endif
        </div>

        <div class="text-center mt-3">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
