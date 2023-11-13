<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Services</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('services.add',request('type')) }}" class="btn btn-outline-success btn-rounded">Add Service</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Services</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th width="20%">Thumbnail</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                        <tr wire:key='{{ $service->id }}'>
                            <th scope="row">{{ $services->firstItem() + $loop->index }}</th>
                            <td>{{ $service->category }}</td>
                            <td>
                                <a href="{{ route('services.details',$service->id) }}" target="_blank">
                                    <img src="{{ $service->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="" target="_blank">
                                    {{ $service->name }}
                                </a>
                            </td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('services.edit',$service->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $service->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No services Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
