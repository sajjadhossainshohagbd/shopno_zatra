@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Balance Cost Of History</h4>
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
                                                <th>Service Name</th>
                                                <th>Service Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($histories as $history)
                                            <tr>
                                                <td>{{ $histories->firstItem() + $loop->index }}</td>
                                                <td>{{ $history->created_at->format('d M Y h:i A') }}</td>
                                                <td>{{ $history->service_name }}</td>
                                                <td>{{ $history->service_price }} BDT</td>
                                            </tr>
                                            @empty
                                            <td colspan="6">No History Found!</td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $histories->links() }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
