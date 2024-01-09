<?php

namespace App\Livewire\Frontend\Hotel;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $hotel;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->hotel = Hotel::findOrFail($id);
    }

    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('hotel.order',$this->hotel->id);
    }

    #[Title('Hotel Details')]
    public function render()
    {
        return view('frontend.hotel.details');
    }
}
