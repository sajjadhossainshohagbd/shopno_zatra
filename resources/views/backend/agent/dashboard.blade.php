<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $hajj }}</span></h4>
                            <p class="text-muted mb-0">Hajj Visa Orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $work }}</span></h4>
                            <p class="text-muted mb-0">Work Visa Orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $education }}</span></h4>
                            <p class="text-muted mb-0">Education Visa Orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $medical }}</span></h4>
                            <p class="text-muted mb-0">Medical Visa Orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $holiday }}</span></h4>
                            <p class="text-muted mb-0">Holiday Pack Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </div>
</div>
