<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Hotel</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('hotel.add') }}" class="btn btn-outline-success btn-rounded">Add Package</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Hotel Packages</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="20%">Thumbnail</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>B2B Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hotels as $hotel)
                        <tr wire:key='{{ $hotel->id }}'>
                            <th scope="row">{{ $hotels->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('ticket.details',$hotel->id) }}" target="_blank">
                                    <img src="{{ $hotel->showThumbnail }}" alt="Thumbnail" class="img-thumbnail" >
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('hotel.details',$hotel->id) }}" target="_blank">
                                {{ $hotel->name }}
                                </a>
                            </td>
                            <td>{{ $hotel->price }}</td>
                            <td>{{ $hotel->b2b_price }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('hotel.edit',$hotel->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $hotel->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No hotel found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $hotels->links() }}
            </div>
        </div>
    </div>
</div>
