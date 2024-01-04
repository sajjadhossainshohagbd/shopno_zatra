<?php

namespace App\Livewire\Frontend\Offers;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Tourist as TouristModel;

#[Layout('frontend.layouts.app')]
class Tourist extends Component
{
    #[Title('Tourist Offers')]
    public function render()
    {
        return view('frontend.offers.tourist',[
            'offers' => TouristModel::latest()->paginate()
        ]);
    }
}
