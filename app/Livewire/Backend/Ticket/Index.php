<?php

namespace App\Livewire\Backend\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $ticket = Ticket::find($id);
       @unlink(public_path($ticket->thumbnail));
       $ticket->delete();

       $this->dispatch('alert',[
        'type' => 'success',
        'message' => 'Package has been deleted!'
    ]);
    }

    #[Title('Ticket')]
    public function render()
    {
        return view('backend.ticket.index',[
            'tickets' => Ticket::latest()->paginate()
        ]);
    }
}
