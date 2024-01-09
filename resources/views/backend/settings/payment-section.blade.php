<div>
    <div class="card">
        <div class="card-title p-2">Payment Section Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
