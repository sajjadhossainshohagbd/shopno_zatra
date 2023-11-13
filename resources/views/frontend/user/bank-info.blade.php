@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Bank Info</h4>
                            <p></p>
                        </div>
                    </div>
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
                                    <a href="{{ route('user.add.balance.request') }}" class="btn btn-info text-white mt-1">Add Balance Request</a>
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
</div>
