<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Hajj</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('hajj.add') }}" class="btn btn-outline-success btn-rounded">Add Package</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Hajj Packages</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Category</td>
                            <th width="20%">Thumbnail</th>
                            <th>Name</th>
                            <th>Start From</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($packages as $package)
                        <tr wire:key='{{ $package->id }}'>
                            <th scope="row">{{ $packages->firstItem() + $loop->index }}</th>
                            <td>{{ ucfirst($package->type) }}</td>
                            <td>
                                <a href="{{ route('hajj.details',['type' => $package->type,'id' => $package->id]) }}" target="_blank">
                                    <img src="{{ $package->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('hajj.details',['type' => $package->type,'id' => $package->id]) }}" target="_blank">
                                {{ $package->package_name }}
                                </a>
                            </td>
                            <td>{{ $package->start_from }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('hajj.edit',$package->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $package->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No packages Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $packages->links() }}
            </div>
        </div>
    </div>
</div>
