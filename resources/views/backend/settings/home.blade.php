
<div>
    <h6>Video Section</h6>
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
        <div class="row">
            <div class="col-md-6">
                <label>Ticket Video Link</label>
                <input type="hidden" name="settings[]" value="ticket_video_link">
                <input type="url" class="form-control" name="ticket_video_link" value="{{ settings('ticket_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Tourist & Business Video Link</label>
                <input type="hidden" name="settings[]" value="tourist_video_link">
                <input type="url" class="form-control" name="tourist_video_link"  value="{{ settings('tourist_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Hotel Booking Video Link</label>
                <input type="hidden" name="settings[]" value="hotel_video_link">
                <input type="url" class="form-control" name="hotel_video_link"  value="{{ settings('hotel_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Work Visa Video Link</label>
                <input type="hidden" name="settings[]" value="work_video_link">
                <input type="url" class="form-control" name="work_video_link"  value="{{ settings('work_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Hajj Visa Video Link</label>
                <input type="hidden" name="settings[]" value="hajj_video_link">
                <input type="url" class="form-control" name="hajj_video_link"  value="{{ settings('hajj_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Education Visa Video Link</label>
                <input type="hidden" name="settings[]" value="education_video_link">
                <input type="url" class="form-control" name="education_video_link"  value="{{ settings('education_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Medical Visa Video Link</label>
                <input type="hidden" name="settings[]" value="medical_video_link">
                <input type="url" class="form-control" name="medical_video_link"  value="{{ settings('medical_video_link') }}">
            </div>
            <div class="col-md-6">
                <label>Holiday Package Video Link</label>
                <input type="hidden" name="settings[]" value="holiday_video_link">
                <input type="url" class="form-control" name="holiday_video_link"  value="{{ settings('holiday_video_link') }}">
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

</div>
