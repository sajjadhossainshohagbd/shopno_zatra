@include('frontend.courses.inc.asset')
<section class="page-content course-sec course-lesson">
    <div class="container">
        <h2 class="text-center bg-white shadow p-2 border-bottom">{{ $course->name }}</h2>
        <div class="row pt-2">
            <div class="col-lg-4">
                <div class="lesson-group">
                    @forelse ($course->lessons as $lesson)
                    <div class="course-card">
                        <h6 class="cou-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse{{ $loop->index }}" aria-expanded="false">{{ $lesson->name }}<span>{{ count($lesson->contents) }} Videos</span> </a>
                        </h6>
                        <div id="collapse{{ $loop->index }}" class="card-collapse collapse">
                            <ul>
                                @forelse ($lesson->contents as $content)
                                <li>
                                    <a href="{{ route('user.course.learn',[
                                        'id' => encrypt($content->course_id),
                                        'content_id' => $content->id
                                    ]) }}" class="play-intro p-0" wire:navigate>{{ $content->title }}</a>
                                    <div>
                                        <img src="{{ asset('frontend/courses') }}/icon/play.svg">
                                    </div>
                                </li>
                                @empty
                                <div class="text-center">No Videos Found!</div>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    @empty
                    <div class="text-center">No Lessons Found!</div>
                    @endforelse
                </div>
            </div>
            @if($preview_content)
            <div class="col-lg-8">
                <div class="student-widget lesson-introduction m-0">
                    <div class="lesson-widget-group">
                        <h4 class="tittle">{{ $preview_content->title }}</h4>
                        <div class="introduct-video">
                            <div style="padding:56.25% 0 0 0;position:relative;" class="shadow rounded">
                                <iframe src="{{ $preview_content->video_url }}" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen lazy></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
