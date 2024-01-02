<?php

namespace App\Livewire\Backend\Tourist;

use Livewire\Component;
use App\Models\TouristOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public $reason;

    public function mount($id)
    {
        $this->order = TouristOrder::findOrFail($id);
        $this->reason = $this->order->reason;
    }

    public function updatePaymentStatus($status)
    {
        $order = $this->order;
        $order->payment_status = $status;
        $order->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Payment status update to '.ucfirst($status)
        ]);
    }

    public function updateStatus($status)
    {
        $order = $this->order;
        $order->status = $status;
        $order->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    public function save()
    {
        $this->order->reason = $this->reason;
        $this->order->save();


        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Message saved!'
        ]);
    }

    #[Title('Order Details')]
    public function render()
    {
        return view('backend.holiday.order-details');
    }
}
