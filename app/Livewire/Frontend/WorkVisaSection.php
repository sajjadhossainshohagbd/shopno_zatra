<?php

namespace App\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use App\Models\WorkVisa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

class WorkVisaSection extends Component
{
    #[Locked]
    public $works;

    #[Locked]
    public $countries;

    #[Locked]
    public $categories;

    #[Locked]
    public $current_category;
    public $current_country;

    public $service_id;
    public $request_country;

    public function mount()
    {
        $this->countries = WorkVisa::get()->unique('country')->pluck('country');
        $this->categories = WorkVisa::get()->unique('category')->pluck('category');
        $this->load();
    }

    public function switchTab($category)
    {
        $this->current_category = $category;
        $this->load();
    }

    public function setRequestCountry($value)
    {
        $this->request_country = $value;
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
        $this->works = WorkVisa::when($this->current_category,function($query){
            $query->where('category',$this->current_category);
        })->when($this->current_country,function($query){
            $query->where('country',$this->current_country);
        })->get();
    }

    public function render()
    {
        return view('frontend.work-visa-section',[
            'services' => Service::work()->get()
        ]);
    }
}
