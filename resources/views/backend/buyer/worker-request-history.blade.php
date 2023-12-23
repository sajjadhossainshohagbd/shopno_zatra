<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Worker Request History</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Worker Request History</div>
        </div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Date</td>
                            <td>Image</td>
                            <td>User</td>
                            <td>Details</td>
                            <td>About Herself</td>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $request)
                        <tr wire:key='{{ $request->id }}'>
                            <th scope="row">{{ $requests->firstItem() + $loop->index }}</th>
                            <td>
                                {{ $request->created_at->format('d M Y') }}
                            </td>
                            <td>
                                <img src="{{ $request->user?->get_profile_pic }}" alt="Thumbnail" class="avatar-md">
                            </td>
                            <td>{{ $request->user?->name }}</td>
                            <td>
                                <span>Languages : {{ $request->user?->worker?->language }}</span> <br>
                                <span>Skills : {{ $request->user?->worker?->skill }}</span> <br>
                                <span>Experience : {{ $request->user?->worker?->experience }}</span>
                            </td>
                            <td>
                                {{ $request->user?->worker?->about }}
                            </td>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $request->status == 'approved',
                                    "bg-danger" => $request->status == 'cancelled',
                                    "bg-info" => $request->status == 'pending',
                                    "bg-primary" => $request->status == 'processing',
                                ])>
                                    {{ ucfirst($request->status) }}
                                </div>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No workers Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
</div>
