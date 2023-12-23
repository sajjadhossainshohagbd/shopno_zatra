<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">My Balance</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">My Balance</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10 mx-auto text-center">
                        <h4>My Balance</h4>
                        <h1><small>BDT</small> {{ auth()->user()->balance }}</h1>
                        <a href="{{ route('buyer.create.balance.request') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Balance</a>
                        <a href="{{ route('buyer.create.withdraw.request') }}" class="btn btn-danger"><i class="fa fa-paper-plane"></i> Withdraw Balance</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
