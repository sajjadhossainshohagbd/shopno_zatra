<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Bank Info</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">Bank Info</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center m-1">
                    @forelse ($infos as $info)
                    <div class="col-md-6 mb-1">
                        <div class="border border-black p-3">
                            <h6 class="text-center"><b>{{ $info->bank_name }}</b></h6>
                            <p class="text-center">{{ $info->bank_address }}</p>
                            <hr>
                            <p><b>Country :</b> {{ $info->country }}</p>
                            <p><b>Account Name :</b> {{ $info->account_name }}</p>
                            <p><b>Account Number :</b> {{ $info->account_number }}</p>
                            <p><b>Routing Number :</b> {{ $info->routing_number }}</p>
                            <p><b>Account Type :</b> {{ $info->type }}</p>
                            <div class="text-center">
                                <a href="{{ route('buyer.create.balance.request') }}" class="btn btn-info text-white mt-1">Add Balance Request</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center text-danger">No Info Found!</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
