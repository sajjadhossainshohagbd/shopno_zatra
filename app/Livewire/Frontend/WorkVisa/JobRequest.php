<?php

namespace App\Livewire\Frontend\WorkVisa;

use App\Models\WorkVisaJobRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

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
    public $skills;
    public $nid;
    public $passport;
    public $present_address;
    public $permanent_address;
    public $education;
    public $choice_job;
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
            'skills' => 'required',
            'nid' => 'nullable|mimes:jpg',
            'passport' => 'nullable|mimes:jpg',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'education' => 'nullable',
            'choice_job' => 'required',
        ]);

        $job = new WorkVisaJobRequest();
        $job->country = $this->country;
        $job->name = $this->name;
        $job->age = $this->age;
        $job->father_name = $this->father_name;
        $job->mother_name = $this->mother_name;
        $job->email = $this->email;
        $job->phone = $this->phone;
        $job->skills = $this->skills;
        $job->nid = $this->nid?->store('uploads/nid','public');
        $job->passport = $this->passport?->store('uploads/passport','public');
        $job->present_address = $this->present_address;
        $job->permanent_address = $this->permanent_address;
        $job->education = $this->education;
        $job->choice_jobs = $this->choice_job;
        $job->status = 'pending';
        $job->save();

        return redirect(route('work.visa.job.request',encrypt($this->country)))->with('success','Job request successfully!');
    }

    #[Title('Work Visa Job Request')]
    public function render()
    {
        return view('frontend.work-visa.job-request');
    }
}
