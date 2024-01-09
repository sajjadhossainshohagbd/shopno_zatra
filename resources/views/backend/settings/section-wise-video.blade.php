<div>
    <div class="card">
        <div class="card-title p-2">Section Wise Video Settings</div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
