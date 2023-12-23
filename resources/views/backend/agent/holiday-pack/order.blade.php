<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Holiday Orders</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Holiday Orders</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Date</td>
                            <td>Package</td>
                            <td>Price</td>
                            <td>Payment status</td>
                            <td>Status</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr wire:key='{{ $order->id }}'>
                            <th scope="row">{{ $orders->firstItem() + $loop->index }}</th>
                            <td>{{ $order->created_at->format('d M Y h:i A') }}</td>
                            <td>
                                <a href="{{ route('holiday.details',$order->holiday_id) }}" target="_blank">
                                    {{-- <img src="{{ $order->hajj->showThumbnail }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                    {{ $order->holiday?->name ?? '--' }}
                                </a>
                            </td>
                            <td>BDT {{ round($order->price) }}</td>
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
                                        <a href="{{ route('b2b.holiday.pack.details',$order->id) }}" class="px-2 text-primary"><i class="uil uil-eye font-size-18"></i></a>
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
