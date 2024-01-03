<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">

                    <div class="card-header">
                        <div class="card-title">
                            <h2>Notifications</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        @forelse (auth()->user()->notifications ?? [] as $notification)
                        <div class="alert alert-success">
                            <h6 class="mb-1">{!! data_get($notification->data,'message') !!}</h6>
                            <h6> - {{ $notification->created_at->format('d M Y h:i A') }}</h6>
                        </div>
                        @empty
                        <div class="text-center">No Notification Found!</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
