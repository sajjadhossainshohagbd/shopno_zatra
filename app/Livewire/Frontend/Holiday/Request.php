<?php

namespace App\Livewire\Frontend\Holiday;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\HolidayPackRequest;

#[Layout('frontend.layouts.app')]
class Request extends Component
{
    use WithFileUploads;

    public $name;
    public $father_name;
    public $mother_name;
    public $email;
    public $phone;
    public $profession;
    public $address;
    public $total_passengers;
    public $adult;
    public $child;
    public $class;
    public $city;
    public $nid;
    public $passport;
    public $police_clearance;

    public $country;

    public function mount($country)
    {
        $this->country = decrypt($country);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required|email:filter',
            'phone' => 'required|min:11',
            'address' => 'required',
            'city' => 'required',
            'class' => 'required',
            'profession' => 'required',
            'total_passengers' => 'required',
            'adult' => 'required',
            'child' => 'required',
            'nid' => 'required|mimes:jpg',
            'passport' => 'required|mimes:jpg',
            'police_clearance' => 'required|mimes:jpg'
        ]);

        $job = new HolidayPackRequest();
        $job->country = $this->country;
        $job->name = $this->name;
        $job->father_name = $this->father_name;
        $job->mother_name = $this->mother_name;
        $job->email = $this->email;
        $job->phone = $this->phone;
        $job->class = $this->class;
        $job->total_passengers = $this->total_passengers;
        $job->adult = $this->adult;
        $job->child = $this->child;
        $job->city = $this->city;
        $job->address = $this->address;
        $job->profession = $this->profession;
        $job->nid = $this->nid->store('uploads/nid','public');
        $job->passport = $this->passport->store('uploads/passport','public');
        $job->police_clearance = $this->police_clearance->store('uploads/police_clearance','public');
        $job->status = 'pending';
        $job->save();

        return redirect(route('holiday.pack.request',encrypt($this->country)))->with('success','Holiday Pack request successfully!');
    }

    #[Title('Holiday Pack Request')]
    public function render()
    {
        return view('frontend.holiday.request');
    }
}
