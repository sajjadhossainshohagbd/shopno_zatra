@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper">
    <div class="loginbox">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center">Buyer Registration</h1>

            <form wire:submit='register'>
                @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="form-group">
                    <label class="form-control-label">Name <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter your name" wire:model='name'>
                    @error('name')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Company/Project Name <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter your Company/Project name" wire:model='company_name'>
                    @error('company_name')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Address <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter company address" wire:model='address'>
                    @error('address')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-control-label">Phone Number <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter your phone number" wire:model='phone'>
                    @error('phone')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Email <span class="text text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="Enter your email address" wire:model='email'>
                    @error('email')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-control-label">Upload Trade License <span class="text text-danger">(Optional)</span> <br> <small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                    <input type="file" class="form-control" wire:model='trade'>
                    @error('trade')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Upload Bank Statement <small>(For Business Verification)</small> <span class="text text-danger">(Optional)</span> <br><small class="text text-danger">(Only JPG,JPEG,PDF format.)</small></label>
                    <input type="file" class="form-control" wire:model='bank_statement'>
                    @error('bank_statement')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary btn-start" type="submit">Submit <i class="fa fa-spinner fa-spin" wire:target='register' wire:loading></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <p class="mb-4">Already acccount ?
            <a href="{{ route('partner.login') }}">Log In</a>
        </p>
    </div>
</div>
