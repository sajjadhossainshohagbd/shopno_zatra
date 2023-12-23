@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper bg-white">
    <div class="loginbox">
        <div class="col-md-10 mx-auto">
            <h1 class="text-center">Become a <span class="text text-app">{{ config('app.name') }} </span> Agent</h1>
            <p class="text-center">
                Fill out the basic info and get a chance to grow your business with us.
            </p>
            <hr>
            <form wire:submit='register'>
                @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <h4 class="text-center">User Info</h4>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Name <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your name" wire:model='name'>
                        @error('name')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Gender <span class="text text-danger">*</span></label>
                        <select class="form-select" wire:model='gender'>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Phone Number <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your phone number" wire:model='phone'>
                        @error('phone')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Email <span class="text text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter your email address" wire:model='email'>
                        @error('email')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Company / Agency Info</h4>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Company Name <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter company name" wire:model='company_name'>
                        @error('company_name')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Company Address <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter company address" wire:model='company_address'>
                        @error('company_address')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">District <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter District" wire:model='district'>
                        @error('district')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Established Date <span class="text text-danger">*</span></label>
                        <input type="date" class="form-control" placeholder="Select Date" wire:model='established_date'>
                        @error('established_date')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label"> Upload Logo <span class="text text-danger">*</span> <small class="text text-danger">(Only JPG,JPEG,PNG format.)</small></label>
                        <input type="file" class="form-control" placeholder="Select Date" wire:model='logo'>
                        @error('logo')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label"> Preview Logo : </label>
                        @if(@$logo)
                        <img src="{{ $logo->temporaryUrl() }}" width="100" height="100">
                        @endif
                    </div>
                </div>

                <hr>
                <h4 class="text-center">Trade License, NID & TIN Info</h4>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Trade License Number <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Trade License Number" wire:model='trade_number'>
                        @error('trade_number')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">NID Number <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter NID Number" wire:model='nid_number'>
                        @error('nid_number')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">TIN Number <span class="text text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter TIN Number" wire:model='tin_number'>
                        @error('tin_number')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Upload Documents</h4>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Upload Trade License <span class="text text-danger">*</span> <small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                        <input type="file" class="form-control" wire:model='trade_license'>
                        @error('trade_license')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Upload TIN Certificate <span class="text text-danger">*</span> <small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                        <input type="file" class="form-control" wire:model='tin'>
                        @error('tin')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Upload NID (Front) <small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                        <input type="file" class="form-control" wire:model='nid_front'>
                        @error('nid_front')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label">Upload NID (Back) <small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                        <input type="file" class="form-control" wire:model='nid_back'>
                        @error('nid_back')
                        <h6 class="text text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-start" type="submit" wire:loading.attr='disabled'>Submit <i class="fa fa-spinner fa-spin" wire:target='register' wire:loading></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <p class="mb-4">Already have a account ?
            <a href="{{ route('partner.login') }}">Log In</a>
        </p>
    </div>
</div>
