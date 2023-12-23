<div>
    <style>
        .table-bordered {
            border: 1px solid #000 !important;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Orders Details</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="border-bottom">Order Property</h6>

                    <table class="table table-bordered">
                        <tr>
                            <th>Payment Status :</th>
                            <td>
                                    <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $order->payment_status == 'paid',
                                    "bg-danger" => $order->payment_status == 'unpaid'
                                ])>
                                    {{ ucfirst($order->payment_status) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Status :</th>
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
                        </tr>
                        <tr>
                            <th>NID :</th>
                            <td>
                                <a href="{{ asset($order->nid) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Passport :</th>
                            <td>
                                <a href="{{ asset($order->passport) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Payment Receipt :</th>
                            <td>
                                @if($order->payment_receipt != null)
                                <a href="{{ asset($order->payment_receipt) }}" target="_blank">Click here to view</a>
                                @else
                                --
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name :</th>
                            <td>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <th>Guardian Name :</th>
                            <td>{{ $order->guardian_name }}</td>
                        </tr>
                        <tr>
                            <th>Guardian Phone :</th>
                            <td>{{ $order->guardian_phone }}</td>
                        </tr>
                        <tr>
                            <th>Address :</th>
                            <td>{{ $order->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <h4>Message from {{ config('app.name') }}</h4>
            <p>
                {{ $order->reason ?? '---' }}
            </p>
        </div>
    </div>
</div>
