<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>{{ $type }}</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ $type }}</div>
            <a href="{{ route('marketing.add',['type' => $rowType]) }}" class="btn btn-info">Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($marketing as $request)
                        <tr wire:key='{{ $request->id }}'>
                            <td scope="row">{{ $marketing->firstItem() + $loop->index }}</td>
                            <td>{{ $request->created_at->format('d M Y') }}</td>
                            <td>BDT {{ $request->amount }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('marketing.edit',$request->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $request->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No data found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $marketing->links() }}
            </div>
        </div>
    </div>
</div>
