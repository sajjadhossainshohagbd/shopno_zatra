<?php

namespace App\Livewire\Backend\EducationVisa;

use App\Models\EducationOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = EducationOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Education Visa Orders')]
    public function render()
    {
        return view('backend.education-visa.order',[
            'orders' => EducationOrder::latest()->paginate()
        ]);
    }
}
