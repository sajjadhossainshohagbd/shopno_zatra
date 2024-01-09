<div>
    <div class="card">
        <div class="card-title p-2">Section Wise Video Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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
    </div>
</div>
