@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Statement Of Transaction</h4>
                        </div>
                        <hr>
                        <form wire:submit='submit'>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-12 mx-auto table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Sender</th>
                                                <th>Purpose</th>
                                                <th>Receiver Account</th>
                                                <th>Status</th>
                                                <th>Received Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transactions->firstItem() + $loop->index }}</td>
                                                <td>{{ $transaction->created_at->format('d M Y h:i A') }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>
                                                    <span>Name : {{ $transaction->user?->name }}</span>  <br>
                                                    <span>Phone : {{ $transaction->user?->phone }}</span>
                                                </td>
                                                <td>{{ $transaction->purpose }}</td>
                                                <td>{{ $transaction->account_number }}</td>
                                                <td>
                                                    <span @class([
                                                        'badge',
                                                        'badge-success' => $transaction->status == 'approved',
                                                        'badge-info' => $transaction->status == 'pending',
                                                        'badge-danger' => $transaction->status == 'cancelled',
                                                    ])>{{ ucfirst($transaction->status) }}</span>
                                                </td>
                                                <td>
                                                    @if($transaction->status == 'approved')
                                                    {{ $transaction->updated_at->format('d M Y h:i A') }}
                                                    @else
                                                    <span class="badge badge-warning">Waiting for approval</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <td colspan="6">No Statement Found!</td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $transactions->links() }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
