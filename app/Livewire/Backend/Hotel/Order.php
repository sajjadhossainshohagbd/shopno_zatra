<?php

namespace App\Livewire\Backend\Hotel;

use App\Models\HotelOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = HotelOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Hotel Orders')]
    public function render()
    {
        return view('backend.hotel.order',[
            'orders' => HotelOrder::latest()->paginate()
        ]);
    }
}
