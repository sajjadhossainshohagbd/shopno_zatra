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
                            <th>CV Delivery Email :</th>
                            <td>
                                {{ $order->cv_delivery_mail }}
                            </td>
                        </tr>
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
                <div class="col-md-12 p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label>Update Payment Status</label>
                            <select class="form-select" wire:change='updatePaymentStatus($event.target.value)'>
                                <option value="unpaid" @selected($order->payment_status == 'unpaid')>Unpaid</option>
                                <option value="paid" @selected($order->payment_status == 'paid')>Paid</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Update Status</label>
                            <select class="form-select" wire:change='updateStatus($event.target.value)'>
                                <option value="pending" @selected($order->status == 'pending')>Pending</option>
                                <option value="processing" @selected($order->status == 'processing')>Processing</option>
                                <option value="approved" @selected($order->status == 'approved')>Approved</option>
                                <option value="cancelled" @selected($order->status == 'cancelled')>Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="border-bottom">Personal Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Picture :</th>
                            <td>
                                <a href="{{ asset($order->picture) }}" target="_blank">Click here to view</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Full Name :</th>
                            <td>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <th>Position :</th>
                            <td>{{ $order->position }}</td>
                        </tr>
                        <tr>
                            <th>About Yourself :</th>
                            <td>{{ $order->about_yourself }}</td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Contact Info</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Email Address :</th>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <th>Website URL :</th>
                            <td>{{ $order->website_url }}</td>
                        </tr>
                        <tr>
                            <th>LinkedIn Profile URL :</th>
                            <td>{{ $order->linkedin_url }}</td>
                        </tr>
                        <tr>
                            <th>Present Address :</th>
                            <td>{{ $order->present_address }}</td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Education</h6>
                    <table class="table table-bordered">
                        <tr>
                            @foreach (json_decode($order->education) as $education)
                            <td>
                                <b>Start Date : </b> {{ $education->start_date }} <br>
                                <b>End Date : </b>{{ $education->end_date }} <br>
                                <b>Course Name : </b>{{ $education->course_name }} <br>
                                <b>Institute Name : </b>{{ $education->institute_name }}
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Languages</h6>
                    <table class="table table-bordered">
                        <tr>
                            @foreach (json_decode($order->language) as $lang)
                            <td>
                                <b>Language Name : </b> {{ $lang->language_name }} <br>
                                <b>Percentage : </b>{{ $lang->lang_percentage }} <br>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Experience</h6>
                    <table class="table table-bordered">
                        <tr>
                            @foreach (json_decode($order->experience) as $experience)
                            <td>
                                <b>Start Date : </b> {{ $experience->start_date }} <br>
                                <b>End Date : </b>{{ $experience->end_date }} <br>
                                <b>Company Name : </b>{{ $experience->company_name }} <br>
                                <b>Position : </b>{{ $experience->position }}
                                <b>Description : </b>{{ $experience->description }}
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="border-bottom">Skills</h6>
                    <table class="table table-bordered">
                        <tr>
                            @foreach (json_decode($order->skill) as $skill)
                            <td>
                                <b>Skill Name : </b> {{ $skill->skill_name }} <br>
                                <b>Skill Percentage : </b>{{ $skill->skill_percentage }} <br>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
