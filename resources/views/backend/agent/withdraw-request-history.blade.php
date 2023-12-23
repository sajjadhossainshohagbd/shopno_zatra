<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Withdraw History</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">Withdraw History</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Bank</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($histories as $history)
                            <tr>
                                <td>{{ $histories->firstItem() + $loop->index }}</td>
                                <td>{{ $history->created_at?->format('d M Y') }}</td>
                                <td>
                                    <span>Bank Name : {{ $history->bank?->name }}</span> <br>
                                    <span>Account Number : {{ $history->bank?->account_number }}</span> <br>
                                    <span>Routing Number : {{ $history->bank?->routing_number }}</span> <br>
                                </td>
                                <td>BDT {{ round($history->amount) }}</td>
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
                            </tr>
                            @empty
                            <td colspan="6">No History Found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $histories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
