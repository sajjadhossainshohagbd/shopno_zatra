<?php

namespace App\Livewire\Frontend\B2B;

use App\Models\Agent;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Register extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule('required|email:filter|unique:users,email')]
    public $email;

    #[Rule('required|unique:users,phone')]
    public $phone;

    #[Rule('required|in:male,female')]
    public $gender;

    #[Rule('required')]
    public $company_name;

    #[Rule('required')]
    public $company_address;

    #[Rule('required')]
    public $district;

    #[Rule('required')]
    public $established_date;

    #[Rule('required|mimes:jpg,jpeg,png')]
    public $logo;

    #[Rule('required')]
    public $trade_number;

    #[Rule('required')]
    public $nid_number;

    #[Rule('required')]
    public $tin_number;

    #[Rule('required|mimes:jpg,jpeg,pdf')]
    public $trade_license;

    #[Rule('required|mimes:jpg,jpeg,pdf')]
    public $tin;

    #[Rule('nullable|mimes:jpg,jpeg,pdf')]
    public $nid_front;

    #[Rule('nullable|mimes:jpg,jpeg,pdf')]
    public $nid_back;

    public function register()
    {
        $this->validate();

        try {

            $user               = new User();
            $user->role         = 'agent';
            $user->name         = $this->name;
            $user->phone        = $this->phone;
            $user->email        = $this->email;
            $user->password     = bcrypt(Str::password(6));
            $user->save();

            $agent = new Agent();
            $agent->user_id = $user->id;
            $agent->company_name = $this->company_name;
            $agent->company_address = $this->company_address;
            $agent->gender = $this->gender;
            $agent->district = $this->district;
            $agent->established_date = $this->established_date;
            $agent->logo = $this->logo->store('uploads/b2b/logo','public');
            $agent->trade_number = $this->trade_number;
            $agent->nid_number = $this->nid_number;
            $agent->tin_number = $this->tin_number;
            $agent->trade_license = $this->trade_license->store('uploads/b2b/trade_license','public');
            $agent->tin = $this->tin->store('uploads/b2b/tin','public');
            $agent->nid_front = $this->nid_front?->store('uploads/b2b/nid_front','public');
            $agent->nid_back = $this->nid_back?->store('uploads/b2b/nid_back','public');
            $agent->status = 'pending';
            $agent->save();

            return redirect(route('b2b.register'))->with('status','Application submitted successfully. We will contact you.');

        } catch (\Throwable $th) {
            return redirect(route('b2b.register'))->with('status','Sorry, Something went wrong!');
        }
    }

    #[Title('Agent Register')]
    public function render()
    {
        return view('frontend.b2-b.register');
    }
}
