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
                    <h6 class="border-bottom">Full Info</h6>
                    <table class="table table-bordered">
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
                            <th>Lanaguages :</th>
                            <td>{{ $request->language }}</td>
                        </tr>
                        <tr>
                            <th>Skills :</th>
                            <td>{{ $request->skill }}</td>
                        </tr>
                        <tr>
                            <th>Experience :</th>
                            <td>{{ $request->experience }}</td>
                        </tr>
                        <tr>
                            <th>About Herself :</th>
                            <td>{{ $request->about }}</td>
                        </tr>
                    </table>
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
