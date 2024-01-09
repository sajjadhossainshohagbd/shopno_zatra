<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card-header">
                        <div class="card-title">
                            <h2>Apply Now</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="bg-app text-white p-2">Selected Package</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="40%">Thumbnail</th>
                                    <th>Package Name</th>
                                    <th>Package Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ $hajj->show_thumbnail }}" width="30%" class="img-thumbnail">
                                    </td>
                                    <td>{{ $hajj->package_name }}</td>
                                    <td>
                                        @if(auth()->user()?->role == 'agent')
                                        <del><span><b>Original Price</b> : {{ $hajj->start_from }} BDT</span></del> <br>
                                        <span><b>B2B Price</b> : {{ $hajj->b2b_price }} BDT</span> <br>
                                        @else
                                        {{ $hajj->start_from }} BDT
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="bg-app text-white p-2">Fill Up Information</h6>
                        <form wire:submit='submit'>
                            <div class="row mt-3">
                                <div class="col-lg-10 mx-auto">
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Your Name <small>(According to NID/Passport)</small> <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='name' class="form-control @error('name') border-danger @enderror" placeholder="Your Name..">
                                                @error('name')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='address' class="form-control @error('address') border-danger @enderror" placeholder="Your Address..">
                                                @error('address')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Your Phone Number <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='phone' class="form-control @error('phone') border-danger @enderror" placeholder="Your phone number">
                                                @error('phone')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Guardian Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='guardian_name' class="form-control @error('guardian_name') border-danger @enderror" placeholder="Your Guard Name..">
                                                @error('guardian_name')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Guardian Phone <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='guardian_phone' class="form-control @error('guardian_phone') border-danger @enderror" placeholder="Your Guard Phone..">
                                                @error('guardian_phone')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your NID <span class="text-danger">*</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='nid' class="form-control @error('nid') border-danger @enderror">
                                                @error('nid')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Passport <span class="text-danger">*</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='passport' class="form-control @error('passport') border-danger @enderror">
                                                @error('passport')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Payment Receipt <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='payment_receipt' class="form-control @error('payment_receipt') border-danger @enderror">
                                                @error('payment_receipt')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="update-profile">
                                        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Send Request <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
