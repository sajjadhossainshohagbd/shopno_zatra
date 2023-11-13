@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="profile-heading bg-white mb-4">
                <h3>My Courses</h3>
                <p>All your purchased courses are here. <span class="text-success">Best wishes to you <i class="fas fa-heart text-danger"></i>.</span></p>
            </div>

            @forelse ($courses as $enroll)
            <div class="course-box course-design list-course d-flex">
                <div class="product">
                    <div class="product-img">
                        <a href="{{ route('course.details',$enroll->course->slug) }}">
                            <img class="img-fluid" alt="" src="{{ $enroll->course->show_thumbnail }}">
                        </a>
                        <div class="price">
                            <h3>৳{{ round($enroll->course->price) }}</h3>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="head-course-title">
                            <h3 class="title">
                                <a href="{{ route('course.details',$enroll->course->slug) }}">
                                    {{ $enroll->course->name }}
                                </a>
                            </h3>
                            <div class="all-btn all-category d-flex align-items-center">
                                <a href="{{ route('user.course.learn',encrypt($enroll->course->id)) }}" class="btn btn-primary">Start Learning</a>
                            </div>
                        </div>
                        <div class="course-info border-bottom-0 pb-0 d-flex align-items-center">
                            <div class="rating-img d-flex align-items-center">
                                <img src="{{ asset('frontend/courses/icon/icon-01.svg') }}" alt="">
                                <p>{{ $enroll->course->lessons->count() }} Lessons</p>
                            </div>
                            <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses/icon/icon-02.svg') }}" alt="">
                                <p>{{ $enroll->course->duration }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center text-danger">No Purchased Course found!</div>
            @endforelse
        </div>
    </div>
</div>
