<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>{{ ucfirst($type) }} Balance Transfer Requests</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ ucfirst($type) }} Balance Transfer Requests</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $request)
                        <tr wire:key='{{ $request->id }}'>
                            <th scope="row">{{ $requests->firstItem() + $loop->index }}</th>
                            <td>{{ $request->created_at->format('d M Y h:i A') }}</td>
                            <td>
                                {{ $request->user?->name }}

                                <div @class([
                                    "badge text-white ",
                                    "bg-success"
                                ])>
                                    {{ ucfirst($request->user?->role) }}
                                </div>
                            </td>
                            <td>{{ $request->amount }}</td>
                            <td>
                                <div @class([
                                    "badge text-white",
                                    "bg-success" => $request->status == 'approved',
                                    "bg-danger" => $request->status == 'cancelled',
                                    "bg-info" => $request->status == 'pending',
                                ])>
                                    {{ ucfirst($request->status) }}
                                </div>
                            </td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('balance.transfer.details',$request->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $request->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No request found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
</div>
