<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Find Workers</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Find Workers</div>
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
                            <td>Image</td>
                            <td>User</td>
                            <td>Details</td>
                            <td>About Herself</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($workers as $worker)
                        <tr wire:key='{{ $worker->id }}'>
                            <th scope="row">{{ $workers->firstItem() + $loop->index }}</th>
                            <td>
                                <img src="{{ $worker->get_profile_pic }}" alt="Thumbnail" class="avatar-md">
                            </td>
                            <td>{{ $worker->name }}</td>
                            <td>
                                <span>Languages : {{ $worker->worker?->language }}</span> <br>
                                <span>Skills : {{ $worker->worker?->skill }}</span> <br>
                                <span>Experience : {{ $worker->worker?->experience }}</span>
                            </td>
                            <td>
                                {{ $worker->worker?->about }}
                            </td>
                            <td>
                                <a href="{{ route('buyer.worker.request',$worker->id) }}" class="px-2 text-primary"><i class="uil uil-plus-circle"></i> Send Request</a>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No workers Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $workers->links() }}
            </div>
        </div>
    </div>
</div>
