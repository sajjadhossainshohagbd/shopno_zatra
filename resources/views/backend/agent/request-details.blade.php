<div>
    <style>
        .table-bordered {
            border: 1px solid #000 !important;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Request Details</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="border-bottom">Documents List</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Logo :</th>
                            <td>
                                <a href="{{ asset($request->logo) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Trade License :</th>
                            <td>
                                <a href="{{ asset($request->trade_license) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>TIN :</th>
                            <td>
                                <a href="{{ asset($request->tin) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>NID Front :</th>
                            <td>
                                @if($request->nid_front != null)
                                <a href="{{ asset($request->nid_front) }}" target="_blank">Click here to view</a>
                                @else
                                --
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>NID Back :</th>
                            <td>
                                @if($request->nid_back != null)
                                <a href="{{ asset($request->nid_back) }}" target="_blank">Click here to view</a>
                                @else
                                --
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Status :</th>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $request->status == 'approved',
                                    "bg-danger" => $request->status == 'rejected',
                                    "bg-info" => $request->status == 'pending',
                                ])>
                                    {{ ucfirst($request->status) }}
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Full Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name :</th>
                            <td>{{ $request->user?->name }}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{ $request->user?->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td>{{ $request->user?->email }}</td>
                        </tr>
                        <tr>
                            <th>Company Name :</th>
                            <td>{{ $request->company_name }}</td>
                        </tr>
                        <tr>
                            <th>Company Address :</th>
                            <td>{{ $request->company_address }}</td>
                        </tr>
                        <tr>
                            <th>District :</th>
                            <td>{{ $request->district }}</td>
                        </tr>
                        <tr>
                            <th>Established Date :</th>
                            <td>{{ $request->established_date }}</td>
                        </tr>
                        <tr>
                            <th>Trade License Number :</th>
                            <td>{{ $request->trade_number }}</td>
                        </tr>
                        <tr>
                            <th>NID Number :</th>
                            <td>{{ $request->nid_number }}</td>
                        </tr>
                        <tr>
                            <th>TIN Number :</th>
                            <td>{{ $request->tin_number }}</td>
                        </tr>
                    </table>
                    {{-- <div><span class="fw-bold">Name : </span>{{ $request->name }}</div>
                    <div><span class="fw-bold">Phone : </span>{{ $request->phone }}</div>
                    <div><span class="fw-bold">Guardian Name : </span>{{ $request->guardian_name }}</div>
                    <div><span class="fw-bold">Guardian Phone : </span>{{ $request->guardian_phone }}</div>
                    <div><span class="fw-bold">Address : </span>{{ $request->address }}</div> --}}
                </div>
                <div class="col-md-12 p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label>Update Status</label>
                            <select class="form-select" wire:confirm='Are you sure?' wire:change='updateStatus($event.target.value)'>
                                <option value="pending" @selected($request->status == 'pending')>Pending</option>
                                <option value="approved" @selected($request->status == 'approved')>Approved</option>
                                <option value="rejected" @selected($request->status == 'rejected')>Rejected</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
