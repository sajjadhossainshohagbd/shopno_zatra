<?php

namespace App\Livewire\Backend\MedicalVisa;

use App\Models\MedicalOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = MedicalOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Medical Visa Orders')]
    public function render()
    {
        return view('backend.medical-visa.order',[
            'orders' => MedicalOrder::latest()->paginate()
        ]);
    }
}
