<?php

namespace App\Livewire\Frontend\MedicalVisa;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\MedicalVisaRequest;

#[Layout('frontend.layouts.app')]
class Request extends Component
{
    use WithFileUploads;

    public $name;
    public $father_name;
    public $mother_name;
    public $email;
    public $phone;
    public $type_of_disease;
    public $preferred_hospital;
    public $nid;
    public $passport;
    public $previous_report;
    public $guardian_nid;

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
            'type_of_disease' => 'required',
            'preferred_hospital' => 'nullable',
            'nid' => 'nullable|mimes:jpg',
            'passport' => 'nullable|mimes:jpg',
            'previous_report' => 'nullable|mimes:jpg',
            'guardian_nid' => 'nullable|mimes:jpg',
        ]);

        $job = new MedicalVisaRequest();
        $job->country = $this->country;
        $job->name = $this->name;
        $job->father_name = $this->father_name;
        $job->mother_name = $this->mother_name;
        $job->email = $this->email;
        $job->phone = $this->phone;
        $job->type_of_disease = $this->type_of_disease;
        $job->nid = $this->nid?->store('uploads/nid','public');
        $job->passport = $this->passport?->store('uploads/passport','public');
        $job->previous_report = $this->previous_report?->store('uploads/previous_report','public');
        $job->guardian_nid = $this->guardian_nid?->store('uploads/guardian_nid','public');
        $job->status = 'pending';
        $job->save();

        return redirect(route('medical.visa.request',encrypt($this->country)))->with('success','Medical Visa request successfully!');
    }

    #[Title('Medical Visa Request')]
    public function render()
    {
        return view('frontend.medical-visa.request');
    }
}
