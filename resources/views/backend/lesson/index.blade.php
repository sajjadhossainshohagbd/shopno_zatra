<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Lessons</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Lessons</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('lessons.add') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Lesson</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lessons as $lesson)
                            <tr wire:key='{{ $lesson->id }}'>
                                <th scope="row">{{ $lessons->firstItem() + $loop->index }}</th>
                                <td>{{ $lesson->course?->name }}</td>
                                <td>{{ $lesson->name }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('lessons.edit',$lesson->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $lesson->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center text-danger">No lessons Found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $lessons->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
