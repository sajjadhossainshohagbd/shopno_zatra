<?php

namespace App\Livewire\Backend\Tourist;

use App\Models\TouristOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = TouristOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Tourist Orders')]
    public function render()
    {
        return view('backend.tourist.order',[
            'orders' => TouristOrder::latest()->paginate()
        ]);
    }
}
