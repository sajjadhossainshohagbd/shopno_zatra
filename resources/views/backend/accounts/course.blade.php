<div>
    <div class="container-fluid">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Course Accounts</h4>
        </div>

        <h2 class="text-center">Income</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Today</h5>
                        <h6>BDT {{ $today }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 7 Days</h5>
                        <h6>BDT {{ $seven_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Last 30 Days</h5>
                        <h6>BDT {{ $thirty_days }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total</h5>
                        <h6>BDT {{ $total }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="card">
                    <div class="card-title p-4"><h4>Top 10 Courses</h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-boredered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course</th>
                                        <th>Sell Count</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($top_ten_courses as $course)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ route('course.details',$course->course?->slug) }}" target="_blank">
                                                <img src="{{ $course->course?->showThumbnail }}" alt="Thumbnail" width="150" class="img-thumbnail" >
                                                {{ $course->course?->name ?? 'N/A' }}
                                            </a>
                                        </td>
                                        <td>{{ $course->enroll_count }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
