<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Course Enrolls</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Course Enrolls</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="20%">Course Thumbnail</th>
                            <th>Course Name</th>
                            <td>User</td>
                            <th>Billing Details</th>
                            <th>Payment Method</th>
                            <th>Purchased Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($enrolls as $enroll)
                        <tr wire:key='{{ $enroll->id }}'>
                            <th scope="row">{{ $enrolls->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('course.details',$enroll->course?->slug) }}" target="_blank">
                                    <img src="{{ $enroll->course?->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>{{ $enroll->course?->name }}</td>
                            <td>{{ $enroll->user?->name }}</td>
                            <td>
                                <div><span class="fw-bold">Name : </span> {{ $enroll->name }}</div>
                                <div><span class="fw-bold">Phone : </span> {{ $enroll->phone }}</div>
                                <div><span class="fw-bold">Address One : </span> {{ $enroll->address_one }}</div>
                                <div><span class="fw-bold">Address Two : </span> {{ $enroll->address_two }}</div>
                                <div><span class="fw-bold">Country : </span> {{ ucfirst($enroll->country) }}</div>
                                <div><span class="fw-bold">State : </span> {{ $enroll->state }}</div>
                                <div><span class="fw-bold">Zip/Postal Code : </span> {{ $enroll->postal_code }}</div>
                            </td>
                            <td>{{ ucwords(str_replace('_',' ',$enroll->payment_method)) }}</td>
                            <td>{{ $enroll->created_at->format('d M Y h:i A') }}</td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No enrolls Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $enrolls->links() }}
            </div>
        </div>
    </div>
</div>
