<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Holiday Pack Request</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Holiday Pack Request</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Date</td>
                            <td>Name</td>
                            <td>Father's Name</td>
                            <td>Mother's Name</td>
                            <td>Phone</td>
                            <td>Status</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($histories as $history)
                        <tr wire:key='{{ $history->id }}'>
                            <th scope="row">{{ $histories->firstItem() + $loop->index }}</th>
                            <td>{{ $history->created_at->format('d M Y') }}</td>
                            <td>{{ $history->name }}</td>
                            <td>{{ $history->father_name }}</td>
                            <td>{{ $history->mother_name }}</td>
                            <td>{{ $history->phone }}</td>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $history->status == 'approved',
                                    "bg-danger" => $history->status == 'cancelled',
                                    "bg-info" => $history->status == 'pending',
                                    "bg-primary" => $history->status == 'processing',
                                ])>
                                    {{ ucfirst($history->status) }}
                                </div>
                            </td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('holiday.request.details',$history->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure delete this order?' wire:click='delete({{ $history->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No history Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $histories->links() }}
            </div>
        </div>
    </div>
</div>
