<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>User List</h5>
        </div>
    </div>
    <div class="card p-4">
        <label for="">Search</label>
        <input type="text" class="form-control" wire:model.live='search' placeholder="Search By name,phone,email..">
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">User List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Korea Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr wire:key='{{ $user->id }}'>
                            <td scope="row">{{ $users->firstItem() + $loop->index }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>BDT {{ $user->course_balance }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('korea.visa.deduct.balance',$user->id) }}" class="px-2 btn btn-primary"><i class="uil uil-minus font-size-18"></i> Deduct</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No data found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
