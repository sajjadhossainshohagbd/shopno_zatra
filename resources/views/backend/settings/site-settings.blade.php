<div>
    <div class="card">
        <div class="card-title p-2">Site Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label>Site Logo</label>
                        <input type="hidden" name="settings[]" value="site_logo">
                        <input type="file" class="form-control" name="site_logo" value="{{ settings('site_logo') }}">
                        @if(file_exists(public_path(settings('site_logo'))))
                        <img src="{{ asset(settings('site_logo')) }}" width="150" class="img-thumbnail mt-2">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Site Favicon</label>
                        <input type="hidden" name="settings[]" value="site_favicon">
                        <input type="file" class="form-control" name="site_favicon" value="{{ settings('site_favicon') }}">
                        @if(file_exists(public_path(settings('site_favicon'))))
                        <img src="{{ asset(settings('site_favicon')) }}" width="100" class="img-thumbnail mt-2">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Facebook Link</label>
                            <input type="hidden" name="settings[]" value="fb_link">
                            <input type="text" class="form-control" name="fb_link" value="{{ settings('fb_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>YouTube Link</label>
                            <input type="hidden" name="settings[]" value="youtube_link">
                            <input type="text" class="form-control" name="youtube_link" value="{{ settings('youtube_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Instagram Link</label>
                            <input type="hidden" name="settings[]" value="instagram_link">
                            <input type="text" class="form-control" name="instagram_link" value="{{ settings('instagram_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Twitter Link</label>
                            <input type="hidden" name="settings[]" value="twitter_link">
                            <input type="text" class="form-control" name="twitter_link" value="{{ settings('twitter_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>LinkedIn Link</label>
                            <input type="hidden" name="settings[]" value="linkedin_link">
                            <input type="text" class="form-control" name="linkedin_link" value="{{ settings('linkedin_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Whatsapp Number</label>
                            <input type="hidden" name="settings[]" value="whatsapp_link">
                            <input type="text" class="form-control" name="whatsapp_link" value="{{ settings('whatsapp_link') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="hidden" name="settings[]" value="footer_phone">
                        <input type="text" name="footer_phone" class="form-control" value="{{ settings('footer_phone') }}">
                    </div>
                    <div class="col-md-6">
                        <label>Email </label>
                        <input type="hidden" name="settings[]" value="footer_email">
                        <input type="email" name="footer_email" class="form-control" value="{{ settings('footer_email') }}">
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
