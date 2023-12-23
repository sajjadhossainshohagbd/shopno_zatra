<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Register extends Component
{

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate([
            'name'    => 'required|string',
            'email'         => 'required|email:filter|unique:users,email',
            'phone'         => 'required|min:11|unique:users,phone',
            'password'      => 'required|min:6|confirmed'
        ]);

        $user               = new User();
        $user->role         = 'user';
        $user->name         = $this->name;
        $user->phone        = $this->phone;
        $user->email        = $this->email;
        $user->password     = bcrypt($this->password);
        $user->save();
        Auth::login($user);

        session()->regenerate();

        return $this->redirect(url('/'));
    }


    #[Title('Create Account')]
    public function render()
    {
        return view('auth.register');
    }
}
