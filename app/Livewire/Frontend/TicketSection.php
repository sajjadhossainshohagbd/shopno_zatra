<?php

namespace App\Livewire\Frontend;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\Attributes\Title;

class TicketSection extends Component
{
    public function render()
    {
        return view('frontend.ticket-section',[
            'tickets' => Ticket::all()
        ]);
    }
}
