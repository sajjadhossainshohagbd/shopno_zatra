<?php

namespace App\Livewire\Frontend\Offers;

use App\Models\Ticket as ModelsTicket;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Ticket extends Component
{
    use WithPagination;

    #[Title('Ticket Offers')]
    public function render()
    {
        return view('frontend.offers.ticket',[
            'offers' => ModelsTicket::latest()->paginate()
        ]);
    }
}
