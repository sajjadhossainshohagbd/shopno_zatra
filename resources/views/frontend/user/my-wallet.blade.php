@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>My Wallet</h4>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h4>Current Balance : </h4>
                            <h2>BDT {{ auth()->user()->balance }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
