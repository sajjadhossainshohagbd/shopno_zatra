<?php

namespace App\Livewire\Frontend\Offers;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\WorkVisa as ModelsWorkVisa;

#[Layout('frontend.layouts.app')]
class WorkVisa extends Component
{
    use WithPagination;

    #[Title('Work Visa Offers')]
    public function render()
    {
        return view('frontend.offers.work-visa',[
            'offers' => ModelsWorkVisa::latest()->paginate()
        ]);
    }
}
