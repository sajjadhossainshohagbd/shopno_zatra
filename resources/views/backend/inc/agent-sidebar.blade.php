<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('b2b.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
               SZ
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{ route('b2b.dashboard') }}" class="logo logo-light">
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
                    <a href="{{ route('b2b.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Order Management</li>
                <li>
                    <a href="{{ route('b2b.work.visa.orders') }}">
                        <i class="fa fa-briefcase"></i>
                        <span>Work Visa Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('b2b.hajj.visa.orders') }}">
                        <i class="fa fa-passport"></i>
                        <span>Hajj Visa Orders</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('b2b.education.visa.orders') }}">
                        <i class="fa fa-user-graduate"></i>
                        <span>Education Visa Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('b2b.medical.visa.orders') }}">
                        <i class="fa fa-hospital"></i>
                        <span>Medical Visa Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('b2b.holiday.pack.orders') }}">
                        <i class="fa fa-box"></i>
                        <span>Holiday Pack Orders</span>
                    </a>
                </li>
                <li class="menu-title">Wallet Management</li>

                <li>
                    <a href="{{ route('b2b.bank.info') }}">
                        <i class="fas fa-info"></i>
                        <span>Bank Info</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-money-bill"></i>
                        <span>Balance </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('b2b.my.balance') }}">My Balance</a></li>
                        <li><a href="{{ route('b2b.balance.request.history') }}">Balance Request History</a></li>
                        <li><a href="{{ route('b2b.create.balance.request') }}"> Create Balance Request</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-paper-plane"></i>
                        <span>Withdraw </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('b2b.my.bank.info') }}"> My Bank Info</a></li>
                        <li><a href="{{ route('b2b.withdraw.request.history') }}"> Withdraw Request History</a></li>
                        <li><a href="{{ route('b2b.create.withdraw.request') }}"> Create Withdraw Request</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
