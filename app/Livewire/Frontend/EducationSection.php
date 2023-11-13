<?php

namespace App\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use App\Models\EducationVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class EducationSection extends Component
{
    #[Locked]
    public $educations;

    #[Locked]
    public $countries;

    #[Locked]
    public $programs;

    #[Locked]
    public $current_program;
    public $current_country;

    public $service_id;


    public function mount()
    {
        $this->countries = EducationVisa::get()->unique('country')->pluck('country');
        $this->programs = EducationVisa::get()->unique('program')->pluck('program');
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

    public function setCountry($country)
    {
        $this->current_country = $country;
        $this->load();
    }

    public function load()
    {
        $this->educations = EducationVisa::when($this->current_program,function($query){
            $query->where('program',$this->current_program);
        })->when($this->current_country,function($query){
            $query->where('country',$this->current_country);
        })->get();
    }

    public function render()
    {
        return view('frontend.education-section',[
            'services' => Service::education()->get()
        ]);
    }
}
