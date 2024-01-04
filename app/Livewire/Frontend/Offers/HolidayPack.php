<?php

namespace App\Livewire\Frontend\Offers;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class HolidayPack extends Component
{
    #[Title('Holiday Pack Offers')]
    public function render()
    {
        return view('frontend.offers.holiday-pack',[
            'offers' => Holiday::latest()->paginate()
        ]);
    }
}
