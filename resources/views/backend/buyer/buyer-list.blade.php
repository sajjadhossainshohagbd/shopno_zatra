<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Buyer List</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Buyer List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Balance</td>
                            <td>Company Name</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($buyers as $buyer)
                        <tr wire:key='{{ $buyer->id }}'>
                            <td scope="row">{{ $buyers->firstItem() + $loop->index }}</td>
                            <td>{{ $buyer->name }}</td>
                            <td>BDT {{ round($buyer->balance) }}</td>
                            <td>{{ $buyer->buyer?->company_name }}</td>
                            <td>{{ $buyer->phone }}</td>
                            <td>{{ $buyer->email }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    {{-- <li class="list-inline-item">
                                        <a href="{{ route('agent.request.details',$buyer->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $buyer->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="7" class="text-center text-danger">No agent Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $buyers->links() }}
            </div>
        </div>
    </div>
</div>
