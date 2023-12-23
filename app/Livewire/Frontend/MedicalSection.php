<?php

namespace App\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use App\Models\MedicalVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class MedicalSection extends Component
{
    #[Locked]
    public $medical;

    #[Locked]
    public $countries;

    #[Locked]
    public $programs;

    #[Locked]
    public $current_program;
    public $current_country;

    public $service_id;

    public $request_country;

    public function mount()
    {
        $this->countries = MedicalVisa::get()->unique('country')->pluck('country');
        $this->programs = MedicalVisa::get()->unique('program')->pluck('program');
        $this->load();
    }

    public function switchTab($program)
    {
        $this->current_program = $program;
        $this->load();
    }

    public function setService($id)
    {
        $this->service_id = $id;
    }

    public function setRequestCountry($country)
    {
        $this->request_country = $country;
    }

    public function setCountry($country)
    {
        $this->current_country = $country;
        $this->load();
    }

    public function load()
    {
        $this->medical = MedicalVisa::when($this->current_program,function($query){
            $query->where('program',$this->current_program);
        })->when($this->current_country,function($query){
            $query->where('country',$this->current_country);
        })->get();
    }

    public function render()
    {
        return view('frontend.medical-section',[
            'services' => Service::medical()->get()
        ]);
    }
}
