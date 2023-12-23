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
                    <h6 class="border-bottom">Request Property</h6>

                    <table class="table table-bordered">
                        <tr>
                            <th>Status :</th>
                            <td>
                                <div @class([
                                    "badge text-white font-size-12",
                                    "bg-success" => $request->status == 'approved',
                                    "bg-danger" => $request->status == 'cancelled',
                                    "bg-info" => $request->status == 'pending',
                                    "bg-primary" => $request->status == 'processing',
                                ])>
                                    {{ ucfirst($request->status) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>NID :</th>
                            <td>
                                @if($request->nid)
                                <a href="{{ asset($request->nid) }}" target="_blank">Click here to view</a>
                                @else
                                ---
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Passport :</th>
                            <td>
                                @if($request->passport)
                                <a href="{{ asset($request->passport) }}" target="_blank">Click here to view</a>
                                @else
                                ---
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Bank Solvency :</th>
                            <td>
                                @if($request->bank_solvency)
                                <a href="{{ asset($request->bank_solvency) }}" target="_blank">Click here to view</a>
                                @else
                                ---
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Academic Certificate :</th>
                            <td>
                                @if($request->academic_certificate)
                                <a href="{{ asset($request->academic_certificate) }}" target="_blank">Click here to view</a>
                                @else
                                ---
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Experience Certificate :</th>
                            <td>
                                @if($request->experience_certificate)
                                <a href="{{ asset($request->experience_certificate) }}" target="_blank">Click here to view</a>
                                @else
                                ---
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Country :</th>
                            <td>
                                {{ $request->country }}
                            </td>
                        </tr>
                        <tr>
                            <th>Choice Subjects :</th>
                            <td>
                                {{ $request->choice_subject }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Others Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name :</th>
                            <td>{{ $request->name }}</td>
                        </tr>
                        <tr>
                            <th>Age :</th>
                            <td>{{ $request->age }}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{ $request->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td>{{ $request->email }}</td>
                        </tr>
                        <tr>
                            <th>Father's Name :</th>
                            <td>{{ $request->father_name }}</td>
                        </tr>
                        <tr>
                            <th>Mother's Phone :</th>
                            <td>{{ $request->mother_name }}</td>
                        </tr>
                        <tr>
                            <th>Present Address :</th>
                            <td>{{ $request->present_address }}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address :</th>
                            <td>{{ $request->permanent_address }}</td>
                        </tr>
                        <tr>
                            <th>Education :</th>
                            <td>{{ $request->education }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label>Update Status</label>
                            <select class="form-select" wire:change='updateStatus($event.target.value)'>
                                <option value="pending" @selected($request->status == 'pending')>Pending</option>
                                <option value="processing" @selected($request->status == 'processing')>Processing</option>
                                <option value="approved" @selected($request->status == 'approved')>Approved</option>
                                <option value="cancelled" @selected($request->status == 'cancelled')>Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
