<div>
    <div class="container-fluid">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Holiday Pack Accounts</h4>
        </div>
        <h2 class="text-center">Packages Income</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Today</h5>
                        <h6>BDT {{ $today }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 7 Days</h5>
                        <h6>BDT {{ $seven_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 30 Days</h5>
                        <h6>BDT {{ $thirty_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total</h5>
                        <h6>BDT {{ $total }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-center">Services Income</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Today</h5>
                        <h6>BDT {{ $services_today }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 7 Days</h5>
                        <h6>BDT {{ $services_seven_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 30 Days</h5>
                        <h6>BDT {{ $services_thirty_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total</h5>
                        <h6>BDT {{ $services_total }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="card">
                <div class="card-title p-4"><h4>Top 10 Packages</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-boredered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Package</th>
                                    <th>Sell Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($top_ten as $pack)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ route('holiday.details',$pack->holiday->id) }}" target="_blank">
                                            <img src="{{ $pack->holiday->showThumbnail }}" alt="Thumbnail" width="150" class="img-thumbnail" >
                                            {{ $pack->holiday->name ?? 'N/A' }}
                                        </a>
                                    </td>
                                    <td>{{ $pack->sell_count }}</td>
                                </tr>
                                @empty
                                <td colspan="4">No Data Found!</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</div>
