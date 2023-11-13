<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Contents</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Contents</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('contents.add') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Content</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Lesson</th>
                                <th>Duration</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contents as $content)
                            <tr wire:key='{{ $content->id }}'>
                                <th scope="row">{{ $contents->firstItem() + $loop->index }}</th>
                                <td>{{ $content->course?->name }}</td>
                                <td>{{ $content->lesson?->name }}</td>
                                <td>{{ $content->duration }}</td>
                                <td>{{ $content->title }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('contents.edit',$content->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $content->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center text-danger">No contents Found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $contents->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
