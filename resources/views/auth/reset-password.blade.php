@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper mt-2">
    <div class="col-md-6 mx-auto">
        <h1>Reset Password</h1>
        <div class="reset-password">
            <p>Enter your new password and type again confirm password.</p>
        </div>
        @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <form wire:submit='resetPassword'>
            <div class="form-group">
                <label class="form-control-label">Email <span class="text text-danger">*</span></label>
                <input type="email" class="form-control @error('email') border-danger @enderror" wire:model='email' placeholder="Enter your email address">
                @error('email')
                <h5 class="text text-danger">
                    {{ $message }}
                </h5>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">New Password <span class="text text-danger">*</span></label>
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
                <button class="btn btn-start" type="submit">Submit <i class="fa fa-spinner fa-spin" wire:target='sendPasswordResetLink' wire:loading></i></button>
            </div>
        </form>
    </div>
</div>
