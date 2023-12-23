<?php

namespace App\Livewire\Frontend\EducationVisa;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\EducationVisaJobRequest;

#[Layout('frontend.layouts.app')]
class JobRequest extends Component
{
    use WithFileUploads;

    public $name;
    public $age;
    public $father_name;
    public $mother_name;
    public $email;
    public $phone;
    public $nid;
    public $passport;
    public $experience_certificate;
    public $bank_solvency;
    public $academic_certificate;
    public $present_address;
    public $permanent_address;
    public $education;
    public $choice_subject;
    public $country;

    public function mount($country)
    {
        $this->country = decrypt($country);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'age' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required|email:filter',
            'phone' => 'required|min:11',
            'nid' => 'nullable|mimes:jpg',
            'passport' => 'nullable|mimes:jpg',
            'experience_certificate' => 'nullable|mimes:jpg',
            'bank_solvency' => 'nullable|mimes:jpg',
            'academic_certificate' => 'nullable|mimes:jpg',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'education' => 'nullable',
            'choice_subject' => 'required',
        ]);

        $job = new EducationVisaJobRequest();
        $job->country = $this->country;
        $job->name = $this->name;
        $job->age = $this->age;
        $job->father_name = $this->father_name;
        $job->mother_name = $this->mother_name;
        $job->email = $this->email;
        $job->phone = $this->phone;
        $job->nid = $this->nid?->store('uploads/nid','public');
        $job->passport = $this->passport?->store('uploads/passport','public');
        $job->experience_certificate = $this->experience_certificate?->store('uploads/experience_certificate','public');
        $job->bank_solvency = $this->bank_solvency?->store('uploads/bank_solvency','public');
        $job->academic_certificate = $this->academic_certificate?->store('uploads/academic_certificate','public');
        $job->present_address = $this->present_address;
        $job->permanent_address = $this->permanent_address;
        $job->education = $this->education;
        $job->choice_subject = $this->choice_subject;
        $job->status = 'pending';
        $job->save();

        return redirect(route('education.visa.job.request',encrypt($this->country)))->with('success','Visa request successfully!');
    }

    #[Title('Education Visa Job Request')]
    public function render()
    {
        return view('frontend.education-visa.job-request');
    }
}
