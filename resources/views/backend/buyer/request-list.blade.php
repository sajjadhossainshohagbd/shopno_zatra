<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Buyer Request List</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Buyer Request List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Company Name</td>
                            <td>Address</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <td>Status</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $request)
                        <tr wire:key='{{ $request->id }}'>
                            <th scope="row">{{ $requests->firstItem() + $loop->index }}</th>
                            <td>{{ $request->user?->name }}</td>
                            <td>{{ $request->company_name }}</td>
                            <td>{{ $request->address }}</td>
                            <td>{{ $request->user?->phone }}</td>
                            <td>{{ $request->user?->email }}</td>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $request->status == 'approved',
                                    "bg-danger" => $request->status == 'rejected',
                                    "bg-info" => $request->status == 'pending',
                                ])>
                                    {{ ucfirst($request->status) }}
                                </div>
                            </td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('buyer.request.details',$request->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $request->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="7" class="text-center text-danger">No request Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
</div>
