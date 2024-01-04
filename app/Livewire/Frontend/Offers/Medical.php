<?php

namespace App\Livewire\Frontend\Offers;

use Livewire\Component;
use App\Models\MedicalVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Medical extends Component
{
    #[Title('Medical Visa Offers')]
    public function render()
    {
        return view('frontend.offers.medical',[
            'offers' => MedicalVisa::latest()->paginate()
        ]);
    }
}
