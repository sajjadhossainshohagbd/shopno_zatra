<?php

namespace App\Livewire\Backend\WorkVisa;

use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = WorkOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Work Visa Orders')]
    public function render()
    {
        return view('backend.work-visa.order',[
            'orders' => WorkOrder::latest()->paginate()
        ]);
    }
}
