<?php

namespace App\Livewire\Backend\Holiday;

use App\Models\HolidayOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = HolidayOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Holiday Orders')]
    public function render()
    {
        return view('backend.holiday.order',[
            'orders' => HolidayOrder::latest()->paginate()
        ]);
    }
}
