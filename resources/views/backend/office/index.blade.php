<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Offices</h5>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('office.add') }}" class="btn btn-outline-success btn-rounded">Add Office</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Offices</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($offices as $office)
                        <tr wire:key='{{ $office->id }}'>
                            <th scope="row">{{ $offices->firstItem() + $loop->index }}</th>
                            <td>{{ $office->title }}</td>
                            <td>{{ ucfirst($office->type) }}</td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('office.edit',$office->id) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure?' wire:click='delete({{ $office->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-danger">No Office Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $offices->links() }}
            </div>
        </div>
    </div>
</div>
