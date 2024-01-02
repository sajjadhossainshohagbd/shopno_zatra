<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Tourist</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('tourist.add') }}" class="btn btn-outline-success btn-rounded">Add Package</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tourist Packages</div>
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
                            <th>Price</th>
                            <th>B2B Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($packages as $tourist)
                        <tr wire:key='{{ $tourist->id }}'>
                            <th scope="row">{{ $packages->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('holiday.details',$tourist->id) }}" target="_blank">
                                    <img src="{{ $tourist->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('holiday.details',$tourist->id) }}" target="_blank">
                                {{ $tourist->name }}
                                </a>
                            </td>
                            <td>{{ $tourist->country }}</td>
                            <td>{{ $tourist->price }}</td>
                            <td>{{ $tourist->b2b_price }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('tourist.edit',$tourist->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $tourist->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No Tourist Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $packages->links() }}
            </div>
        </div>
    </div>
</div>
