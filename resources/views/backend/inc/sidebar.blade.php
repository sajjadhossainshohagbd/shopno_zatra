<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
               SZ
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
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
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-video"></i>
                        <span>Course Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('categories.index') }}">Category List</a></li>
                        <li><a href="{{ route('courses.index') }}">Course List</a></li>
                        <li><a href="{{ route('lessons.index') }}">Lesson List</a></li>
                        <li><a href="{{ route('contents.index') }}">Content List</a></li>
                        <li><a href="{{ route('course.enrolls') }}">Enroll List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-passport"></i>
                        <span>Hajj Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('hajj.index') }}">Hajj List</a></li>
                        <li><a href="{{ route('services.index','hajj_visa') }}">Service List</a></li>
                        <li><a href="{{ route('hajj.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','hajj_visa') }}">Service Orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-briefcase"></i>
                        <span>Work Visa Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('work.visa.index') }}">Work Visa List</a></li>
                        <li><a href="{{ route('services.index','work_visa') }}">Service List</a></li>
                        <li><a href="{{ route('work.visa.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','work_visa') }}">Service Orders</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user-graduate"></i>
                        <span>Education V Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('education.visa.index') }}">Education Visa List</a></li>
                        <li><a href="{{ route('services.index','education_visa') }}">Service List</a></li>
                        <li><a href="{{ route('education.visa.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','education_visa') }}">Service Orders</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-hospital"></i>
                        <span>Medical Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('medical.visa.index') }}">Medical Visa List</a></li>
                        <li><a href="{{ route('services.index','medical_visa') }}">Service List</a></li>
                        <li><a href="{{ route('medical.visa.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','medical_visa') }}">Service Orders</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-box"></i>
                        <span>Holiday Pack Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('holiday.index') }}">Medical Visa List</a></li>
                        <li><a href="{{ route('services.index','holiday_package') }}">Service List</a></li>
                        <li><a href="{{ route('holiday.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','holiday_package') }}">Service Orders</a></li>

                    </ul>
                </li>

                <li class="menu-title">Wallet Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-university"></i>
                        <span>Bank Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('bank.info.index') }}">Bank List</a></li>
                        <li><a href="{{ route('bank.info.add') }}">Add Bank</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-university"></i>
                        <span>Balance Request</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('balance.request.index') }}">All Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'pending']) }}">Pending Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'approved']) }}">Approved Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'cancelled']) }}">Cancelled Request List</a></li>
                    </ul>
                </li>

                <li class="menu-title">System</li>
                <li>
                    <a href="{{ route('settings') }}">
                        <i class="uil-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
