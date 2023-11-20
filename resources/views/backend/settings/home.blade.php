<div>
    <h3>Video Section</h3>
    <hr>
    <div>
        <form wire:submit='add'>
            <div class="row">
                <div class="col-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model='name' placeholder="Menu Name">
                </div>
                <div class="col-3">
                    <select wire:model='type' class="form-select">
                        <option value="video">Video</option>
                        <option value="link">Link</option>
                    </select>
                </div>
                <div class="col-6">
                    <input type="url" class="form-control @error('url') is-invalid @enderror" wire:model='url' placeholder="Video URL">
                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-success btn-rounded" type="submit"><i class="fa fa-plus"></i> Add </button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Menu Name</th>
                    <th>Type</th>
                    <th>Video URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sections as $section)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $section->name }}</td>
                    <td>{{ ucfirst($section->type) }}</td>
                    <td>{{ $section->url }}</td>
                    <td>
                        <button class="btn btn-danger btn-rounded" wire:confirm='Are you sure?' wire:click='delete("{{ $section->id }}")'><i class="fa fa-trash"></i> Delete </button>
                    </td>
                </tr>
                @empty
                <td colspan="4" class="text-center">No Data Found!</td>
                @endforelse
            </tbody>
        </table>
    </div>
    <hr>
    <form action="{{ route('settings.store') }}" method="POST">
        @csrf

        <h3>Booking Section</h3>
        <div class="accordion" id="sectionAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Ticket Section </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body text-muted">
                        <label>Ticket Video Link</label>
                        <input type="hidden" name="settings[]" value="ticket_video_link">
                        <input type="url" class="form-control" name="ticket_video_link" value="{{ settings('ticket_video_link') }}">
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
                        <input type="url" class="form-control" name="tourist_video_link"  value="{{ settings('tourist_video_link') }}">
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
                        <input type="url" class="form-control" name="hotel_video_link"  value="{{ settings('hotel_video_link') }}">
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
                        <input type="url" class="form-control" name="hajj_video_link"  value="{{ settings('hajj_video_link') }}">
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
                        <input type="url" class="form-control" name="education_video_link"  value="{{ settings('education_video_link') }}">
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
                        <input type="url" class="form-control" name="medical_video_link"  value="{{ settings('medical_video_link') }}">
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
                        <input type="url" class="form-control" name="holiday_video_link"  value="{{ settings('holiday_video_link') }}">
                    </div>
                </div>
            </div>
        </div>
        <h3>Footer</h3>
        <div class="mb-2">
            <label>Address</label>
            <input type="hidden" name="settings[]" value="footer_address">
            <textarea name="footer_address" class="form-control" rows="3">{{ settings('footer_address') }}</textarea>
        </div>
        <div class="mb-2">
            <label>Phone</label>
            <input type="hidden" name="settings[]" value="footer_phone">
            <input type="text" name="footer_phone" class="form-control" value="{{ settings('footer_phone') }}">
        </div>
        <div class="mb-2">
            <label>Email </label>
            <input type="hidden" name="settings[]" value="footer_email">
            <input type="email" name="footer_email" class="form-control" value="{{ settings('footer_email') }}">
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>
