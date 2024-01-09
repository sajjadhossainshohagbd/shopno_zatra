<?php

namespace App\Livewire\Backend\Ticket;

use App\Models\TicketOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = TicketOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Ticket Orders')]
    public function render()
    {
        return view('backend.ticket.order',[
            'orders' => TicketOrder::latest()->paginate()
        ]);
    }
}
