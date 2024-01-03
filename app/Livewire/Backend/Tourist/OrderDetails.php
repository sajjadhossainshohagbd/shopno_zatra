<?php

namespace App\Livewire\Backend\Tourist;

use Livewire\Component;
use App\Models\TouristOrder;
use App\Notifications\UpdateStatusNotification;
use Illuminate\Support\Facades\Notification;
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

        Notification::send($order->user,new UpdateStatusNotification("Your tourist package '{$order->tourist?->name}' order payment status updated from <b>{$order->getOriginal('payment_status')}</b> to <b>{$order->payment_status}</b>."));

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

        Notification::send($order->user,new UpdateStatusNotification("Your tourist package '{$order->tourist?->name}' order status updated from <b>{$order->getOriginal('status')}</b> to <b>{$order->status}</b>."));

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
