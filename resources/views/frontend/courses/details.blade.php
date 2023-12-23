@include('frontend.courses.inc.asset')
<div>
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('courses') }}">Courses</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ $course->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-banner" style="background-image: url({{ $course->showThumbnail }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instructor-wrap border-bottom-0 m-0">
                        <span class="web-badge mb-3">{{ $course->category?->name }}</span>
                    </div>
                    <h2>{{ $course->name }}</h2>
                    <p>{{ $course->short_description }}</p>
                    <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
                        <div class="cou-info"> <img src="{{ asset('frontend/courses') }}/icon/icon-01.svg" alt="">
                            <p>{{ $course->lessons_count }} Lesson</p>
                        </div>
                        <div class="cou-info"> <img src="{{ asset('frontend/courses') }}/icon/timer-icon.svg" alt="">
                            <p>{{ $course->duration }}</p>
                        </div>
                        <div class="cou-info"> <img src="{{ asset('frontend/courses') }}/icon/people.svg" alt="">
                            <p>{{ $course->enrolls_count }} Students enrolled</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page-content course-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card overview-sec">
                        <div class="card-body">
                            <h5 class="subs-title">Overview</h5>
                            {!! $course->description !!}
                        </div>
                    </div>
                    <div class="card content-sec">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="subs-title">Course Content</h5>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    {{-- <h6>92 Lectures 10:56:11</h6> --}}
                                </div>
                            </div>
                            @foreach ($course->lessons as $lesson)
                            <div class="course-card">
                                <h6 class="cou-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse{{ $loop->index }}" aria-expanded="false">
                                        {{ $lesson->name }}
                                    </a>
                                </h6>
                                <div id="collapse{{ $loop->index }}" class="card-collapse collapse">
                                    <ul>
                                        @foreach ($lesson->contents as $content)
                                        <li>
                                            <p><img src="{{ asset('frontend/courses') }}/icon/play.svg" alt="" class="me-2">{{ $content->title }}</p>
                                            <div> <span>{{ $content->duration ?? '0:00' }}</span> </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    {{-- <div class="card review-sec">
                        <div class="card-body">
                            <h5 class="subs-title">Reviews</h5>
                            <div class="instructor-wrap">
                                <div class="about-instructor">
                                    <div class="abt-instructor-img"> <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/user/user1.jpg" alt="img" class="img-fluid"></a> </div>
                                    <div class="instructor-detail">
                                        <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                        <p>UX/UI Designer</p>
                                    </div>
                                </div>
                                <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating">4.5 Instructor Rating</span> </div>
                            </div>
                            <p class="rev-info">“ This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first. The sound and video quality is of a good standard. Thank you Cristian. “</p> <a href="javascript:;" class="btn btn-reply"><i class="feather-corner-up-left"></i> Reply</a>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sec">
                        <div class="video-sec vid-bg">
                            <div class="card">
                                <div class="card-body">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="{{ $course->video_url }}" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="video-details">
                                        <div class="course-fee">
                                            <h2>৳{{ round($course->price) }}</h2>
                                        </div>
                                        @if(!$isEnrolled)
                                        {{-- <button wire:click="addToCart()" class="btn btn-wish w-100"><i class="feather-heart"></i> Add to Cart</button> --}}
                                        <button wire:click="checkOut()" class="btn btn-enroll w-100">Apply For Admission</button>
                                        @else
                                        <a href="#" class="btn btn-wish w-100">Go to course</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card feature-sec">
                            <div class="card-body">
                                <div class="cat-title">
                                    <h4>Includes</h4>
                                </div>
                                <ul>
                                    <li><img src="{{ asset('frontend/courses') }}/icon/users.svg" class="me-2" alt=""> Enrolled: <span>{{ $course->enrolls_count }} students</span></li>
                                    <li><img src="{{ asset('frontend/courses') }}/icon/timer.svg" class="me-2" alt=""> Duration: <span>{{ $course->duration }}</span></li>
                                    <li><img src="{{ asset('frontend/courses') }}/icon/chapter.svg" class="me-2" alt=""> Lessons: <span>{{ $course->lessons_count }}</span></li>
                                    <li><img src="{{ asset('frontend/courses') }}/icon/chart.svg" class="me-2" alt=""> Level: <span>{{ ucfirst($course->level) }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
