<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('/backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/backend') }}/assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('/backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/backend') }}/assets/images/logo-light.png" alt="" height="20">
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
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
