@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper bg-white">
    <div class="loginbox">
        <div class="col-md-6 m-auto">
            <h1 class="text-center mt-2">Partner Log In</h1>

            <form wire:submit='login'>
                @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address" wire:model='email'>
                    @error('email')
                    <h6 class="text text-danger">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Password</label>
                    <div class="pass-group" x-data="{show : false}">
                        <input :type="show ? 'text' : 'password'" class="form-control pass-input" wire:model='password' placeholder="Enter your password">
                        <span class="fa fa-eye toggle-password" :class="{'d-block' : !show, 'd-none':show }" x-on:click="show = !show"></span>
                        <span class="fa fa-eye-slash toggle-password" :class="{'d-block' : show, 'd-none': !show }" x-on:click="show = !show"></span>
                    </div>
                    @error('password')
                    <h6 class="text text-danger font-sm">{{ $message }}</h6>
                    @enderror
                </div>
                <div class="forgot">
                    <span>
                        <a class="forgot-link" href="{{ route('forget.password') }}">Forgot Password ?</a>
                    </span>
                </div>
                <div class="remember-me">
                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                        <input type="checkbox" wire:model='remember'> <span class="checkmark"></span>
                    </label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Log In <i class="fas fa-spinner fa-spin" wire:loading></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <p class="mb-4">Become a Buyer ?
            <a href="{{ route('buyer.register') }}">Create an Account</a>
        </p>
        <p class="mb-4">Become a Agent ?
            <a href="{{ route('b2b.register') }}">Create an Account</a>
        </p>
    </div>
</div>