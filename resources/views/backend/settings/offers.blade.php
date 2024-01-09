<div>
    <div class="card">
        <div class="card-title p-2">Offers Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
