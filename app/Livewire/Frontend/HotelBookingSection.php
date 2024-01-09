<?php

namespace App\Livewire\Frontend;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;

class HotelBookingSection extends Component
{
    public function render()
    {
        return view('frontend.hotel-booking-section',[
            'hotels' => Hotel::all()
        ]);
    }
}
