<div>
    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-6">
                <h5>Bank Info</h5>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a href="{{ route('buyer.add.bank') }}" class="btn btn-outline-success btn-rounded">Add Bank</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Account Name </th>
                                <th>Account Number </th>
                                <th>Routing Number </th>
                                <th>Account Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banks as $bank)
                            <tr wire:key='{{ $bank->id }}'>
                                <th scope="row">{{ $banks->firstItem() + $loop->index }}</th>
                                <td>{{ $bank->name }}</td>
                                <td>{{ $bank->account_name }}</td>
                                <td>{{ $bank->account_number}}</td>
                                <td>{{ $bank->routing_number}}</td>
                                <td>{{ ucfirst($bank->account_type) }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('buyer.edit.bank',$bank->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $bank->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="8" class="text-center text-danger">No bank Found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $banks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
