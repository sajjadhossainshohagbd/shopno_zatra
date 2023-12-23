<div>
    <div class="container">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card-header">
                        <div class="card-title text-center">
                            <h2>Medical Visa Request</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="bg-app text-white p-2">Fill Up Information</h6>
                        <form wire:submit.prevent='submit'>
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
                                                <label class="form-control-label">Father's Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='father_name' class="form-control @error('father_name') border-danger @enderror" placeholder="Father's Name..">
                                                @error('father_name')
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
                                                <label class="form-control-label">Mother's Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='mother_name' class="form-control @error('mother_name') border-danger @enderror" placeholder="Mother's Name..">
                                                @error('mother_name')
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
                                                <label class="form-control-label">Email Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" wire:model='email' class="form-control @error('email') border-danger @enderror" placeholder="Email Address..">
                                                @error('email')
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
                                                <label class="form-control-label">Phone Number <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='phone' class="form-control @error('phone') border-danger @enderror" placeholder="Phone Numebr for emergency..">
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
                                                <label class="form-control-label">Type Of Disease <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea wire:model='type_of_disease' class="form-control @error('type_of_disease') border-danger @enderror" placeholder="Enter your type of disease here..."></textarea>
                                                @error('type_of_disease')
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
                                                <label class="form-control-label">Upload Previous Report <span class="text-danger">(Optional)</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='previous_report' class="form-control @error('previous_report') border-danger @enderror">
                                                @error('previous_report')
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
                                                <label class="form-control-label">Do you have any preferred hospital? <span class="text-danger">(Optional)</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea wire:model='preferred_hospital' class="form-control @error('preferred_hospital') border-danger @enderror" placeholder="Enter your type of disease here..."></textarea>
                                                @error('preferred_hospital')
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
                                                <label class="form-control-label">Upload Your NID <span class="text-danger">(Optional)</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
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
                                                <label class="form-control-label">Upload Your Passport <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
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
                                                <label class="form-control-label">Upload Your Guardian NID <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='guardian_nid' class="form-control @error('guardian_nid') border-danger @enderror">
                                                @error('guardian_nid')
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