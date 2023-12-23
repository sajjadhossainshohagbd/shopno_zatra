<?php

namespace App\Livewire\Auth\Buyer;

use App\Models\User;
use App\Models\Buyer;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $company_name;
    public $address;
    public $email;
    public $phone;
    public $trade;
    public $bank_statement;

    public function register()
    {
        $this->validate([
            'name'          => 'required|string',
            'company_name'  => 'required|string',
            'address'       => 'required|string',
            'email'         => 'required|email:filter|unique:users,email',
            'phone'         => 'required|unique:users,phone',
            'trade'         => 'nullable|mimes:jpg,jpeg,pdf',
            'bank_statement'=> 'nullable|mimes:jpg,jpeg,pdf',
        ]);

        try {

            $user               = new User();
            $user->role         = 'buyer';
            $user->name         = $this->name;
            $user->phone        = $this->phone;
            $user->email        = $this->email;
            $user->password     = bcrypt(Str::password());
            $user->save();

            $buyer = new Buyer();
            $buyer->user_id = $user->id;
            $buyer->company_name = $this->company_name;
            $buyer->address = $this->address;
            $buyer->trade = $this->trade?->store('uploads/buyers/trade_license','public');
            $buyer->bank_statement = $this->bank_statement?->store('uploads/buyers/bank_statement','public');
            $buyer->status  = 'pending';
            $buyer->save();

            return redirect(route('buyer.register'))->with('status','Application submitted successfully. We will contact you.');
        } catch (\Throwable $th) {
            return throw $th;

            return redirect(route('buyer.register'))->with('status','Sorry, Something went wrong!');
        }
    }

    #[Title('Buyer Registration')]
    public function render()
    {
        return view('auth.buyer.register');
    }
}
