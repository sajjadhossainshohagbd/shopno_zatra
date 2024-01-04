<?php

namespace App\Livewire\Frontend\Offers;

use Livewire\Component;
use App\Models\EducationVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Education extends Component
{
    #[Title('Education Visa Offers')]
    public function render()
    {
        return view('frontend.offers.education',[
            'offers' => EducationVisa::latest()->paginate()
        ]);
    }
}
