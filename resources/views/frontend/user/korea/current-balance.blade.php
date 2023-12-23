<div>
    @include('frontend.courses.inc.asset')
    <div class="container">
        <div class="row">
            @include('frontend.user.nav')
            <div class="col-lg-9 mx-auto">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Current Korea Balance : </h4>
                            <h2>BDT {{ auth()->user()->course_balance }}</h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="text-black">Deduct History</div>
                    </div>
                    <div class="card-body">
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
                                @forelse ($histories as $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $history->created_at->format('d M Y h:i A') }}</td>
                                    <td>{{ $history->reason }}</td>
                                    <td>BDT {{ $history->amount }}</td>
                                </tr>
                                @empty
                                <td colspan="4" class="text-center">No data found!</td>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $histories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
