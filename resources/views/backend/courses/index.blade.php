<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Courses</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('courses.add') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Course</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="20%">Thumbnail</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($courses as $course)
                            <tr wire:key='{{ $course->id }}'>
                                <th scope="row">{{ $courses->firstItem() + $loop->index }}</th>
                                <td>
                                    <a href="{{ route('course.details',$course->slug) }}" target="_blank">
                                        <img src="{{ $course->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('course.details',$course->slug) }}" target="_blank">
                                    {{ $course->name }}
                                    </a>
                                </td>
                                <td>{{ $course->category?->name }}</td>
                                <td>{{ $course->price }}</td>
                                <td>
                                    <div @class([
                                        'badge text-white font-size-12',
                                        'bg-success' => $course->status == 'published',
                                        'bg-info' => $course->status == 'draft'])>
                                    {{ ucfirst($course->status) }}
                                    </div>
                                </td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('courses.edit',$course->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $course->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center text-danger">No Courses Found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $courses->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
