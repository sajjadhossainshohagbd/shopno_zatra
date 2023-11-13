<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Work Visa</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('work.visa.add') }}" class="btn btn-outline-success btn-rounded">Add Package</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Work Visa Packages</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="20%">Thumbnail</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Category</th>
                            <th>Process Days</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($works as $work)
                        <tr wire:key='{{ $work->id }}'>
                            <th scope="row">{{ $works->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('work.visa.details',$work->id) }}" target="_blank">
                                    <img src="{{ $work->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('work.visa.details',$work->id) }}" target="_blank">
                                {{ $work->name }}
                                </a>
                            </td>
                            <td>{{ $work->country }}</td>
                            <td>{{ $work->category }}</td>
                            <td>{{ $work->process_days }}</td>
                            <td>{{ $work->price }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('work.visa.edit',$work->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $work->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No work visa Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $works->links() }}
            </div>
        </div>
    </div>
</div>
