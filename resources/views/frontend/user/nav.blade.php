<div class="col-xl-3 col-md-4 theiaStickySidebar pt-4">
    <div class="theiaStickySidebar">
        <div class="settings-widget dash-profile mb-3">
            <div class="settings-menu p-0">
                <div class="profile-bg">
                    <div class="profile-img">
                        <a href="{{ route('user.my.profile') }}">
                            <img src="{{ auth()->user()->getProfilePic }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="profile-group">
                    <div class="profile-name text-center">
                        <h4><a href="{{ route('user.my.profile') }}">{{ auth()->user()->name }}</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="settings-widget account-settings">
            <div class="settings-menu">
                <h3>Menu</h3>
                <ul>
                    <li @class(['nav-item','active' => Route::is('user.my.courses')])> <a href="{{ route('user.my.courses') }}" class="nav-link"> <i class="fas fa-video"></i> My Courses </a> </li>
                    <li @class(['nav-item','active' => Route::is('user.my.profile')])> <a href="{{ route('user.my.profile') }}" class="nav-link"> <i class="fas fa-cog"></i> My Profile </a> </li>
                </ul>
                <h3 class="mt-2">Payment</h3>
                <ul>
                    <li @class(['nav-item','active' => Route::is('user.my.wallet')])> <a href="{{ route('user.my.wallet') }}" class="nav-link"> <i class="fas fa-wallet"></i> My Wallet </a> </li>
                    <li @class(['nav-item','active' => Route::is('user.bank.info') ])> <a href="{{ route('user.bank.info') }}" class="nav-link"> <i class="fas fa-info"></i> Bank Info </a> </li>
                    <li @class(['nav-item','active' => Route::is('user.add.balance.request') ])> <a href="{{ route('user.add.balance.request') }}" class="nav-link"> <i class="fas fa-circle-plus"></i> Add Balance Request </a> </li>
                    <li @class(['nav-item','active' => Route::is('user.balance.transfer') ])> <a href="{{ route('user.balance.transfer') }}" class="nav-link"> <i class="fas fa-money-bill-transfer"></i> Balance Transfer</a> </li>
                    <li @class(['nav-item','active' => Route::is('user.transaction.statement') ])> <a href="{{ route('user.transaction.statement') }}" class="nav-link"> <i class="fas fa-s"></i> Statement Of Transaction</a> </li>
                    <li @class(['nav-item','active' => Route::is('user.download.receipt') ])> <a href="{{ route('user.download.receipt') }}" class="nav-link"> <i class="fas fa-download"></i> Download Your Receipt</a> </li>
                    {{-- <li class="nav-item"> <a href="#" class="nav-link"> <i class="fas fa-download"></i> Download Your Receipt</a> </li> --}}
                </ul>
                <h3 class="mt-2">Korea Visa</h3>
                <ul>
                    <li @class(['nav-item','active' => Route::is('user.korea.deposit.request')])> <a href="{{ route('user.korea.deposit.request') }}" class="nav-link"> <i class="fas fa-plus"></i> Deposit </a> </li>
                    <li @class(['nav-item','active' => Route::is('user.korea.balance')])> <a href="{{ route('user.korea.balance') }}" class="nav-link"> <i class="fas fa-dollar"></i> Current Balance & History </a> </li>
                </ul>
                <h3>Worker</h3>
                <ul>
                    <li class="nav-item"> <a href="{{ route('user.worker.profile') }}" class="nav-link"> <i class="fas fa-user"></i> Worker Profile </a> </li>
                </ul>
                <h3>Log Out</h3>
                <ul>
                    <li class="nav-item"> <a href="{{ route('user.logout') }}" class="nav-link"> <i class="fas fa-arrow-left"></i> Log Out </a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
