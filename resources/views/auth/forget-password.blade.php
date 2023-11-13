@push('css')
<link rel="stylesheet" href="{{ asset('frontend/courses') }}/css/style.css">
@endpush
<div class="login-wrapper">
    <div class="loginbox">
        <h1>Forgot Password ?</h1>
        <div class="reset-password">
            <p>Enter your email to reset your password.</p>
        </div>
        @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <form wire:submit='sendPasswordResetLink'>
            <div class="form-group">
                <label class="form-control-label">Email</label>
                <input type="email" class="form-control @error('email') border-danger @enderror" wire:model='email' placeholder="Enter your email address">
                @error('email')
                <h5 class="text text-danger">
                    {{ $message }}
                </h5>
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-start" type="submit">Submit <i class="fa fa-spinner fa-spin" wire:target='sendPasswordResetLink' wire:loading></i></button>
            </div>
        </form>
    </div>
</div>
