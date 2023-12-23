<div>
    <div class="container-fluid">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Agent Accounts</h4>
        </div>

        <h2 class="text-center">Deposit</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Today</h5>
                        <h6>BDT {{ $today_deposit }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 7 Days</h5>
                        <h6>BDT {{ $seven_deposit }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 30 Days</h5>
                        <h6>BDT {{ $thirty_deposit }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total</h5>
                        <h6>BDT {{ $total_deposit }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-center">Withdraw</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Today</h5>
                        <h6>BDT {{ $today_withdraw }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 7 Days</h5>
                        <h6>BDT {{ $seven_withdraw }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 30 Days</h5>
                        <h6>BDT {{ $thirty_withdraw }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total</h5>
                        <h6>BDT {{ $total_withdraw }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
