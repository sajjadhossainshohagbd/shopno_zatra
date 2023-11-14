<?php

namespace App\Livewire\Backend\Hajj;

use App\Models\HajjOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = HajjOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Hajj Visa Orders')]
    public function render()
    {
        return view('backend.hajj.order',[
            'orders' => HajjOrder::latest()->paginate()
        ]);
    }
}
