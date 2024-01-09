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
                        <i class="uil-file-alt"></i>
                        <span>Accounts Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('accounts.courses') }}">Courses</a></li>
                        <li><a href="{{ route('accounts.hajj.visa') }}">Hajj Visa</a></li>
                        <li><a href="{{ route('accounts.work.visa') }}">Work Visa</a></li>
                        <li><a href="{{ route('accounts.education.visa') }}">Education Visa</a></li>
                        <li><a href="{{ route('accounts.medical.visa') }}">Medical Visa</a></li>
                        <li><a href="{{ route('accounts.holiday.pack') }}">Holiday Pack</a></li>
                        <li><a href="{{ route('accounts.buyer') }}">Buyers</a></li>
                        <li><a href="{{ route('accounts.agent') }}">Agents</a></li>
                        <li><a href="{{ route('accounts.customer') }}">Customers</a></li>
                    </ul>
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
                        <i class="fa fa-clone"></i>
                        <span>Ticket Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('ticket.index') }}">Ticket List</a></li>
                        <li><a href="{{ route('ticket.orders') }}">Orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-hotel"></i>
                        <span>Hotel Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('hotel.index') }}">Hotel List</a></li>
                        <li><a href="{{ route('hotel.orders') }}">Orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-passport"></i>
                        <span>Hajj Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('hajj.index') }}">Hajj List</a></li>
                        <li><a href="{{ route('services.index','hajj_visa') }}">Hajj Service List</a></li>
                        <li><a href="{{ route('services.index','umrah_visa') }}">Umrah Service List</a></li>
                        <li><a href="{{ route('hajj.orders') }}">Orders</a></li>
                        <li><a href="{{ route('services.orders','hajj_visa') }}">Hajj Service Orders</a></li>
                        <li><a href="{{ route('services.orders','umrah_visa') }}">Umrah Service Orders</a></li>
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
                        <li><a href="{{ route('work.visa.request.history') }}">Request History</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-chess"></i>
                        <span>Tourist Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('tourist.index') }}">Tourist List</a></li>
                        <li><a href="{{ route('tourist.orders') }}">Orders</a></li>
                        <li><a href="{{ route('tourist.request.history') }}">Request History</a></li>
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
                        <li><a href="{{ route('education.visa.request.history') }}">Request History</a></li>
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
                        <li><a href="{{ route('medical.visa.request.history') }}">Request History</a></li>
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
                        <li><a href="{{ route('holiday.request.history') }}">Request History</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-address-card"></i>
                        <span>CV Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('special.cv.orders') }}">Orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-award"></i>
                        <span>Agent Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('agent.index') }}">Agent List</a></li>
                        <li><a href="{{ route('agent.request.list') }}">Agent Request List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-store"></i>
                        <span>Buyer Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('buyer.index') }}">Buyer List</a></li>
                        <li><a href="{{ route('buyer.request.list') }}">Buyer Request List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-users"></i>
                        <span>Worker Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('worker.index') }}">Worker List</a></li>
                        <li><a href="{{ route('worker.request.list') }}">Worker Request List</a></li>
                        <li><a href="{{ route('worker.buyer.requests') }}">Buyer Requests</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-passport"></i>
                        <span>Korea Visa Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('korea.visa.user.list') }}">User List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-chart-line"></i>
                        <span>Marketing Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('marketing.index',['type' => 'seo']) }}">Search Engine Optimization</a></li>
                        <li><a href="{{ route('marketing.index',['type' => 'google_ads']) }}">Google Ads </a></li>
                        <li><a href="{{ route('marketing.index',['type' => 'fb_ads']) }}">Facebook Ads </a></li>
                        <li><a href="{{ route('marketing.index',['type' => 'youtube_ads']) }}">Youtube Ads</a></li>
                        <li><a href="{{ route('marketing.index',['type' => 'making']) }}">Video & Graphics Making</a></li>
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
                        <span>Balance Requests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('balance.request.index') }}">All Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'pending']) }}">Pending Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'approved']) }}">Approved Request List</a></li>
                        <li><a href="{{ route('balance.request.index',['type' => 'cancelled']) }}">Cancelled Request List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-random"></i>
                        <span>Balance Transfer Requests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('balance.transfer.index') }}">All Request List</a></li>
                        <li><a href="{{ route('balance.transfer.index',['type' => 'pending']) }}">Pending Request List</a></li>
                        <li><a href="{{ route('balance.transfer.index',['type' => 'approved']) }}">Approved Request List</a></li>
                        <li><a href="{{ route('balance.transfer.index',['type' => 'cancelled']) }}">Cancelled Request List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-paper-plane"></i>
                        <span>Balance Withdraw Requests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('balance.withdraw.index') }}">All Request List</a></li>
                        <li><a href="{{ route('balance.withdraw.index',['type' => 'pending']) }}">Pending Request List</a></li>
                        <li><a href="{{ route('balance.withdraw.index',['type' => 'approved']) }}">Approved Request List</a></li>
                        <li><a href="{{ route('balance.withdraw.index',['type' => 'cancelled']) }}">Cancelled Request List</a></li>
                    </ul>
                </li>

                <li class="menu-title">System</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-newspaper"></i>
                        <span>News Media</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('news.category.index') }}">Categories</a></li>
                        <li><a href="{{ route('post.index') }}">Posts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-file"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('page.index') }}">Page List</a></li>
                        <li><a href="{{ route('page.add') }}">Add New Page</a></li>
                        <li><a href="{{ route('page.contact.us') }}">Contact Us</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('office.index') }}">
                        <i class="uil-map"></i>
                        <span>Offices</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-file"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('site.settings') }}">Site Settings</a></li>
                        <li><a href="{{ route('settings.services') }}">Services</a></li>
                        <li><a href="{{ route('settings.offers') }}">Offers</a></li>
                        <li><a href="{{ route('settings.payment.section') }}">Payment Section</a></li>
                        <li><a href="{{ route('settings.section.wise.video') }}">Section Wise Video</a></li>
                        <li><a href="{{ route('settings.cv') }}">CV Section</a></li>
                        <li><a href="{{ route('settings.footer') }}">Footer</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
