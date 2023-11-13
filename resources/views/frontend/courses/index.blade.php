@include('frontend.courses.inc.asset')
<div>
    {{-- <section class="home-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-7">
                    <div class="home-slide-face aos">
                        <div class="home-slide-text ">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging &amp; Accessible Online Courses For All</h1>
                            <p>Own your future learning new skills online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="girl-slide-img aos"> <img src="{{ asset('frontend/courses') }}/images/object.png" alt=""> </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="section how-it-works">
        <div class="container">
            <div class="owl-carousel mentoring-course owl-theme aos">
                @foreach ($categories as $category)
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ $category->show_icon }}" alt="Icon">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">{{ $category->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section new-course">
        <div class="container">
            <div class="section-header aos">
                <div class="section-sub-head">
                    <h2>Our Courses</h2>
                </div>
                {{-- <div class="all-btn all-category d-flex align-items-center"> <a href="course-list.html" class="btn btn-primary">All Courses</a> </div> --}}
            </div>
            <div class="course-feature">
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ route('course.details',$course->slug) }}"> <img class="img-fluid" alt="{{ $course->name }}" src="{{ $course->showThumbnail }}"> </a>
                                    <div class="price">
                                        <h3><b>৳ </b>{{ round($course->price) }}</h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title instructor-text">
                                        <a href="{{ route('course.details',$course->slug) }}">{{ $course->name }}</a>
                                    </h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="">
                                            <p>{{ $course->lessons_count }} Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="">
                                            <p>{{ $course->duration }}</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        {{-- <span class="d-inline-block average-rating">
                                            <span>4.0</span> (15)
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    {{-- <section class="section trend-course">
        <div class="container">
            <div class="section-header aos">
                <div class="section-sub-head">
                    <h2>TRENDING COURSES</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center"> <a href="course-list.html" class="btn btn-primary">All Courses</a> </div>
            </div>
            <div class="section-text aos">
            </div>
            <div class="owl-carousel trending-course owl-theme aos">
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-07.jpg"> </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Michael</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Learn JavaScript and Express to become a professional JavaScript</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-08.jpg"> </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user2.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-05.jpg"> </a>
                            <div class="price">
                                <h3>$100 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user3.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">Lavern M.</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">The Complete App Design Course - UX, UI and Design Thinking</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>8+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>8hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-08.jpg"> </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user5.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Build Responsive Real World Websites with HTML5 and CSS3</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-07.jpg"> </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user2.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-09.jpg"> </a>
                            <div class="price">
                                <h3>$100 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user4.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">Lavern M.</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">The Complete App Design Course - UX, UI and Design Thinking</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>8+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>8hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-08.jpg"> </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user1.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Michael</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Learn JavaScript and Express to become a professional JavaScript</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="course-details.html"> <img class="img-fluid" alt="" src="{{ asset('frontend/courses') }}/images/course-09.jpg"> </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3> </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="instructor-profile.html"><img src="{{ asset('frontend/courses') }}/images/user3.jpg" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="instructor-profile.html">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center"> <a href="#"><i class="fa-regular fa-heart"></i></a> </div>
                            </div>
                            <h3 class="title"><a href="course-details.html">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-01.svg" alt="" class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center"> <img src="{{ asset('frontend/courses') }}/images/icon-02.svg" alt="" class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="rating"> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star filled"></i> <i class="fas fa-star"></i> <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div>
                            <div class="all-btn all-category d-flex align-items-center"> <a href="checkout.html" class="btn btn-primary">BUY NOW</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section latest-blog">
        <div class="container">
            <div class="enroll-group aos">
                <div class="row ">
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img "> <img src="{{ asset('frontend/courses') }}/images/icon-07.svg" alt="" class="img-fluid"> </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">253,085</span></h3>
                                <p>STUDENTS ENROLLED</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img "> <img src="{{ asset('frontend/courses') }}/images/icon-08.svg" alt="" class="img-fluid"> </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">1,205</span></h3>
                                <p>TOTAL COURSES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img "> <img src="{{ asset('frontend/courses') }}/images/icon-09.svg" alt="" class="img-fluid"> </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">127</span></h3>
                                <p>COUNTRIES</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
