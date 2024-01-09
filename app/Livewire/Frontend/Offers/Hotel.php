<?php

namespace App\Livewire\Frontend\Offers;

use App\Models\Hotel as ModelsHotel;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Hotel extends Component
{
    use WithPagination;

    #[Title('Hotel Offers')]
    public function render()
    {
        return view('frontend.offers.hotel',[
            'offers' => ModelsHotel::latest()->paginate()
        ]);
    }
}
