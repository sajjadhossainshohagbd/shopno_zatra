<?php

namespace App\Livewire\Frontend;

use App\Models\Tourist;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class TouristSection extends Component
{
    #[Locked]
    public $packages;

    #[Locked]
    public $countries;

    #[Locked]
    public $categories;

    public $current_country;
    public $request_country;

    public function mount()
    {
        $this->countries = Tourist::get()->unique('country')->pluck('country');
        $this->categories = Tourist::get()->unique('category')->pluck('category');
        $this->load();
    }

    public function setRequestCountry($value)
    {
        $this->request_country = $value;
    }

    public function setCountry($country)
    {
        $this->current_country = $country;
        $this->load();
    }

    public function load()
    {
        $this->packages = Tourist::when($this->current_country,function($query){
            $query->where('country',$this->current_country);
        })->get();
    }

    public function render()
    {
        return view('frontend.tourist-section');
    }
}
