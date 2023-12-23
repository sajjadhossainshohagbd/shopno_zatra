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
                                                <th>Purpose</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transactions->firstItem() + $loop->index }}</td>
                                                <td>{{ $transaction->created_at->format('d M Y h:i A') }}</td>
                                                <td>{{ ucwords(str_replace('_',' ',$transaction->type)) }}</td>
                                                <td class="{{ $transaction->type == 'add_balance' || $transaction->type == 'add_balance_for_korea_visa' ? 'text-success' : 'text-danger' }}"> {{ $transaction->type == 'add_balance' || $transaction->type == 'add_balance_for_korea_visa' ? '+' : '-' }} {{ $transaction->price }} BDT</td>
                                            </tr>
                                            @empty
                                            <td colspan="8" class="text-center">No Statement Found!</td>
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
