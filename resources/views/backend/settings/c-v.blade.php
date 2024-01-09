<div>
    <div class="card">
        <div class="card-title p-2">CV Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label>CV Preview Image</label>
                        <input type="hidden" name="settings[]" value="cv_preview_image">
                        <input type="file" class="form-control" name="cv_preview_image" value="{{ settings('cv_preview_image') }}">
                        @if(file_exists(public_path(settings('cv_preview_image'))))
                        <img src="{{ asset(settings('cv_preview_image')) }}" width="100" class="img-thumbnail mt-2">
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="hidden" name="settings[]" value="cv_title">
                            <input type="text" class="form-control" name="cv_title" value="{{ settings('cv_title') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="hidden" name="settings[]" value="cv_description">
                            <textarea name="cv_description" id="cv_description" class="form-control" cols="30" rows="4">{{ settings('cv_description') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Button One Title</label>
                        <input type="hidden" name="settings[]" value="cv_btn_one_title">
                        <input type="text" name="cv_btn_one_title" class="form-control" value="{{ settings('cv_btn_one_title') }}">
                    </div>
                    <div class="col-md-6">
                        <label>Button One URL</label>
                        <input type="hidden" name="settings[]" value="cv_btn_one_url">
                        <input type="text" name="cv_btn_one_url" class="form-control" value="{{ settings('cv_btn_one_url') }}">
                    </div>

                    <div class="col-md-6">
                        <label>Button Two Title</label>
                        <input type="hidden" name="settings[]" value="cv_btn_two_title">
                        <input type="text" name="cv_btn_two_title" class="form-control" value="{{ settings('cv_btn_two_title') }}">
                    </div>
                    <div class="col-md-6">
                        <label>Button Two URL</label>
                        <input type="hidden" name="settings[]" value="cv_btn_two_url">
                        <input type="text" name="cv_btn_two_url" class="form-control" value="{{ settings('cv_btn_two_url') }}">
                    </div>

                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
