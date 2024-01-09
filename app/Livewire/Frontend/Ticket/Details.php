<?php

namespace App\Livewire\Frontend\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $ticket;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);
    }

    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('ticket.order',$this->ticket->id);
    }

    #[Title('Ticket Details')]
    public function render()
    {
        return view('frontend.ticket.details');
    }
}
