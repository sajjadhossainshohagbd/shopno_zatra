<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">News Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">News Category</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('news.category.add') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Category</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr wire:key='{{ $category->id }}'>
                                <th scope="row">{{ $categories->firstItem() + $loop->index }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('news.category.edit',$category->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $category->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center text-danger">No categoryFound!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
