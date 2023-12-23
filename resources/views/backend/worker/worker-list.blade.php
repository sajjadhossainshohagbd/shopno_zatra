<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Worker List</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Worker List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Picture</td>
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Languages</td>
                            <td>Skills</td>
                            <td>Experience</td>
                            <td>About Herself</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($workers as $worker)
                        <tr wire:key='{{ $worker->id }}'>
                            <th scope="row">{{ $workers->firstItem() + $loop->index }}</th>
                            <td>
                                <img src="{{ $worker->get_profile_pic }}" class="avatar-sm">
                            </td>
                            <td>{{ $worker->name }}</td>
                            <td>{{ $worker->worker?->contact_phone }}</td>
                            <td>{{ $worker->worker?->language }}</td>
                            <td>{{ $worker->worker?->skill }}</td>
                            <td>{{ $worker->worker?->experience }}</td>
                            <td>{{ $worker->worker?->about }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $worker->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="9" class="text-center text-danger">No worker Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $workers->links() }}
            </div>
        </div>
    </div>
</div>
