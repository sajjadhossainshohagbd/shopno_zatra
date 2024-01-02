<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Pages</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('page.add') }}" class="btn btn-outline-success btn-rounded">Add Page</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pages</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pages as $page)
                        <tr wire:key='{{ $page->id }}'>
                            <th scope="row">{{ $pages->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('page.details',$page->slug) }}" target="_blank">
                                {{ $page->title }}
                                </a>
                            </td>
                            <td>{{ $page->slug }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('page.edit',$page->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $page->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No Page Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $pages->links() }}
            </div>
        </div>
    </div>
</div>
