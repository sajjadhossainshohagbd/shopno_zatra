<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class SectionLogin extends Component
{
    #[Rule(['required', 'string'])]
    public string $email = '';

    #[Rule(['required', 'string','min:6'])]
    public string $password = '';

    #[Rule(['boolean'])]
    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        $credentials = [
            'password' => $this->password
        ];

        $fieldName = filter_var($this->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials[$fieldName] = $this->email;

        $user = User::whereIn('role',['admin','staff','user'])->where($fieldName,$this->email)->first();

        if($user && Hash::check($this->password,$user->password)){
            auth()->attempt($credentials, $this->remember);
        }elseif($user && !Hash::check($this->password,$user->password)){
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'password' => trans('auth.password'),
            ]);
        }else{
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $role = auth()->user()->role;

        $route = $role == 'admin' || $role == 'staff' ? route('admin.dashboard') : route('user.my.profile');

        $this->redirect(
            $route
        );
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }

    public function render()
    {
        return view('auth.section-login');
    }
}
