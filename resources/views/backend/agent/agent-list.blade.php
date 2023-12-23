<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Agent List</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Agent List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Logo</td>
                            <td>Name</td>
                            <td>Balance</td>
                            <td>Company Name</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($agents as $agent)
                        <tr wire:key='{{ $agent->id }}'>
                            <th scope="row">{{ $agents->firstItem() + $loop->index }}</th>
                            <td>
                                <img src="{{ $agent->agent?->logo_url }}" class="avatar-sm">
                            </td>
                            <td>{{ $agent->name }}</td>
                            <td>BDT {{ round($agent->balance) }}</td>
                            <td>{{ $agent->agent?->company_name }}</td>
                            <td>{{ $agent->phone }}</td>
                            <td>{{ $agent->email }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    {{-- <li class="list-inline-item">
                                        <a href="{{ route('agent.request.details',$agent->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $agent->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="7" class="text-center text-danger">No agent Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $agents->links() }}
            </div>
        </div>
    </div>
</div>
