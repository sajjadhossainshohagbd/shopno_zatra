<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Holiday</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('holiday.add') }}" class="btn btn-outline-success btn-rounded">Add Package</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Holiday Packages</div>
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
                            <th>Program</th>
                            <th>Price</th>
                            <th>B2B Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($packages as $holiday)
                        <tr wire:key='{{ $holiday->id }}'>
                            <th scope="row">{{ $packages->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('holiday.details',$holiday->id) }}" target="_blank">
                                    <img src="{{ $holiday->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('holiday.details',$holiday->id) }}" target="_blank">
                                {{ $holiday->name }}
                                </a>
                            </td>
                            <td>{{ $holiday->country }}</td>
                            <td>{{ $holiday->program }}</td>
                            <td>{{ $holiday->price }}</td>
                            <td>{{ $holiday->b2b_price }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('holiday.edit',$holiday->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $holiday->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No Medical visa Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $packages->links() }}
            </div>
        </div>
    </div>
</div>
