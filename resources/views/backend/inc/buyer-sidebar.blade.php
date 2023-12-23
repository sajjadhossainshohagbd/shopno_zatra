<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('buyer.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
               SZ
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{ route('buyer.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                SZ
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('buyer.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('buyer.find.worker') }}">
                        <i class="uil-search"></i>
                        <span>Find Workers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('buyer.worker.request.history') }}">
                        <i class="uil-history"></i>
                        <span>Worker Request History</span>
                    </a>
                </li>
                <li class="menu-title">Wallet Management</li>
                <li>
                    <a href="{{ route('buyer.bank.info') }}">
                        <i class="fas fa-info"></i>
                        <span>Bank Info</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-credit-card"></i>
                        <span>Pay </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('buyer.pay.history') }}">Pay History</a></li>
                        <li><a href="{{ route('buyer.pay.create') }}">Create Pay Request</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-money-bill"></i>
                        <span>Balance </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('buyer.my.balance') }}">My Balance</a></li>
                        <li><a href="{{ route('buyer.balance.request.history') }}">Balance Request History</a></li>
                        <li><a href="{{ route('buyer.create.balance.request') }}"> Create Balance Request</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-paper-plane"></i>
                        <span>Withdraw </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('buyer.my.bank.info') }}"> My Bank Info</a></li>
                        <li><a href="{{ route('buyer.withdraw.request.history') }}"> Withdraw Request History</a></li>
                        <li><a href="{{ route('buyer.create.withdraw.request') }}"> Create Withdraw Request</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
