<?php

namespace App\Livewire\Frontend\Tourist;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TouristRequest;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class VisaRequest extends Component
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

        $tourist = new TouristRequest();
        $tourist->country = $this->country;
        $tourist->name = $this->name;
        $tourist->father_name = $this->father_name;
        $tourist->mother_name = $this->mother_name;
        $tourist->email = $this->email;
        $tourist->phone = $this->phone;
        $tourist->class = $this->class;
        $tourist->total_passengers = $this->total_passengers;
        $tourist->adult = $this->adult;
        $tourist->child = $this->child;
        $tourist->city = $this->city;
        $tourist->address = $this->address;
        $tourist->profession = $this->profession;
        $tourist->nid = $this->nid->store('uploads/nid','public');
        $tourist->passport = $this->passport->store('uploads/passport','public');
        $tourist->police_clearance = $this->police_clearance->store('uploads/police_clearance','public');
        $tourist->status = 'pending';
        $tourist->save();

        return redirect(route('tourist.visa.request',encrypt($this->country)))->with('success','Tourist Pack request successfully!');
    }

    #[Title('Tourist Pack Request')]
    public function render()
    {
        return view('frontend.tourist.visa-request');
    }
}
