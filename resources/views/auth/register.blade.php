@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper">
    <div class="loginbox">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Create Account</h1>

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
                    <label class="form-control-label">Password <span class="text text-danger">*</span></label>
                    <div class="pass-group" x-data="{show : false}">
                        <input :type="show ? 'text' : 'password'" class="form-control pass-input" wire:model='password' placeholder="Enter your password">
                        <span class="fa fa-eye toggle-password" :class="{'d-block' : !show, 'd-none':show }" x-on:click="show = !show"></span>
                        <span class="fa fa-eye-slash toggle-password" :class="{'d-block' : show, 'd-none': !show }" x-on:click="show = !show"></span>
                    </div>
                    @error('password')
                    <h6 class="text text-danger font-sm">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Confirm Password <span class="text text-danger">*</span></label>
                    <div class="pass-group" x-data="{show : false}">
                        <input :type="show ? 'text' : 'password'" class="form-control pass-input" wire:model='password_confirmation' placeholder="Enter your password">
                        <span class="fa fa-eye toggle-password" :class="{'d-block' : !show, 'd-none':show }" x-on:click="show = !show"></span>
                        <span class="fa fa-eye-slash toggle-password" :class="{'d-block' : show, 'd-none': !show }" x-on:click="show = !show"></span>
                    </div>
                    @error('password_confirmation')
                    <h6 class="text text-danger font-sm">{{ $message }}</h6>
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
            <a href="{{ route('login') }}">Log In</a>
        </p>
    </div>
</div>
