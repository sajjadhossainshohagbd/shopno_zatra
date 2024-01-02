<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Posts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('post.add') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Post</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr wire:key='{{ $post->id }}'>
                                <th scope="row">{{ $posts->firstItem() + $loop->index }}</th>
                                <td>
                                    <img src="{{ $post->show_thumbnail }}" alt="Thumbnail" class="img-thumbnail" width="100">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category?->name }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{ route('post.edit',$post->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $post->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center text-danger">No post found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
