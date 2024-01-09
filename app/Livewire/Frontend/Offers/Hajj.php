<?php

namespace App\Livewire\Frontend\Offers;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Hajj as HajjModel;

#[Layout('frontend.layouts.app')]
class Hajj extends Component
{
    use WithPagination;

    #[Title('Hajj Offers')]
    public function render()
    {
        return view('frontend.offers.hajj',[
            'offers' => HajjModel::latest()->paginate()
        ]);
    }
}
