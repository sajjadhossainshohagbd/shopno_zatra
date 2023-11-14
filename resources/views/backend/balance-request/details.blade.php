<div>
    <style>
        .table-bordered {
            border: 1px solid #000 !important;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Balance Request Details</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="border-bottom">Request Property</h6>

                    <table class="table table-bordered">
                        <tr>
                            <th>Status :</th>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $balance->status == 'approved',
                                    "bg-danger" => $balance->status == 'cancelled',
                                    "bg-info" => $balance->status == 'pending',
                                    "bg-primary" => $balance->status == 'processing',
                                ])>
                                    {{ ucfirst($balance->status) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Voucher :</th>
                            <td>
                                <a href="{{ asset($balance->voucher) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>NID/ Passport/ Ekama ID :</th>
                            <td>
                                <a href="{{ asset($balance->document) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Amount :</th>
                            <td>
                               {{ $balance->amount }}
                            </td>
                        </tr>
                        <tr>
                            <th>Transaction ID :</th>
                            <td>
                               {{ $balance->transaction_id }}
                            </td>
                        </tr>
                        <tr>
                            <th>Message From Customer :</th>
                            <td>
                               {{ $balance->message }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Customer Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name :</th>
                            <td>{{ $balance->user?->name }}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{ $balance->user?->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email Address :</th>
                            <td>{{ $balance->user?->email }}</td>
                        </tr>
                        <tr>
                            <th>Current Balance :</th>
                            <td>{{ $balance->user?->balance }} BDT</td>
                        </tr>
                    </table>
                </div>
                <div class="container">
                    <hr>
                <h5>Bank Details</h5>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Bank Name</th>
                            <th>Account Name </th>
                            <th>Account Number </th>
                            <th>Routing Number </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $balance->bank?->country }}</td>
                            <td>{{ $balance->bank?->bank_name }}</td>
                            <td>{{ $balance->bank?->account_name }}</td>
                            <td>{{ $balance->bank?->account_number }}</td>
                            <td>{{ $balance->bank?->routing_number }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="col-md-12 p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <label>Update Status</label>
                            <select class="form-select" wire:change='updateStatus($event.target.value)' @disabled($balance->status == 'approved')>
                                <option value="pending" @selected($balance->status == 'pending')>Pending</option>
                                <option value="approved" @selected($balance->status == 'approved')>Approved</option>
                                <option value="cancelled" @selected($balance->status == 'cancelled')>Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
