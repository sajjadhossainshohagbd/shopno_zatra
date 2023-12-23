<?php

namespace App\Livewire\Backend;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    use WithFileUploads;

    public $name,$email,$phone,$profile_pic;

    public $current_password;

    public $new_password;

    public $password_confirmation;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->phone = auth()->user()->phone;
        $this->email = auth()->user()->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $user = User::findOrFail(auth()->id());
        $user->name = $this->name;
        $user->phone = $this->phone;
        if($this->profile_pic != null){
            $user->profile_picture = $this->profile_pic->store('uploads/profile_picture','public');
        }
        $user->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Profile updated successfully!'
        ]);

    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $user = User::find(auth()->id());

        if (Hash::check($this->current_password, $user->password)) {
            $user->password = $this->new_password;
            $user->save();

            $this->dispatch('alert', [
                'type' => 'success',
                'message' => 'Password has been changed!',
            ]);
        } else {
            $this->dispatch('alert', [
                'type' => 'error',
                'message' => 'Current password is wrong!',
            ]);
        }

        $this->reset(['new_password', 'current_password', 'password_confirmation']);

    }

    #[Title('Profile')]
    public function render()
    {
        return view('backend.profile');
    }
}
