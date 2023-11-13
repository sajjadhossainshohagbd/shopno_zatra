<?php

namespace App\Livewire\Frontend;

use App\Models\Holiday;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class HolidaySection extends Component
{
    #[Locked]
    public $days;

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
        $this->countries = Holiday::get()->unique('country')->pluck('country');
        $this->programs = Holiday::get()->unique('program')->pluck('program');
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
        $this->days = Holiday::when($this->current_program,function($query){
            $query->where('program',$this->current_program);
        })->when($this->current_country,function($query){
            $query->where('country',$this->current_country);
        })->get();
    }

    public function render()
    {
        return view('frontend.holiday-section',[
            'services' => Service::holiday()->get()
        ]);
    }
}
