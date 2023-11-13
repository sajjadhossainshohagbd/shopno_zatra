<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Education Orders</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Education Orders</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Package</td>
                            <td>User</td>
                            <td>Payment status</td>
                            <td>Status</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr wire:key='{{ $order->id }}'>
                            <th scope="row">{{ $orders->firstItem() + $loop->index }}</th>
                            <td>
                                <a href="{{ route('education.visa.details',$order->education_id) }}" target="_blank">
                                    {{-- <img src="{{ $order->hajj->showThumbnail }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                    {{ $order->education?->name ?? '--' }}
                                </a>
                            </td>
                            <td>{{ $order->user?->name }}</td>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $order->payment_status == 'paid',
                                    "bg-danger" => $order->payment_status == 'unpaid'
                                ])>
                                {{ ucfirst($order->payment_status) }}
                                </div>
                            </td>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $order->status == 'approved',
                                    "bg-danger" => $order->status == 'cancelled',
                                    "bg-info" => $order->status == 'pending',
                                    "bg-primary" => $order->status == 'processing',
                                ])>
                                {{ ucfirst($order->status) }}
                                </div>

                            </td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('education.visa.order.details',$order->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" wire:confirm='Are you sure delete this order?' wire:click='delete({{ $order->id }})' class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center text-danger">No orders Found!</td>
                        @endforelse
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>