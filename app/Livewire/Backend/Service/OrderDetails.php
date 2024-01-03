<?php

namespace App\Livewire\Backend\Service;

use Livewire\Component;
use App\Models\ServiceOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Models\BalanceCostHistory;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UpdateStatusNotification;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public $reason;

    public function mount($id)
    {
        $this->order = ServiceOrder::findOrFail($id);
        $this->reason = $this->order->reason;
    }

    public function updatePaymentStatus($status)
    {
        $order = $this->order;
        $order->payment_status = $status;
        $type = str_replace('_',' ',$order->service?->type);
        Notification::send($order->user,new UpdateStatusNotification("Your {$type} service '{$order->service?->name}' order payment status updated from <b>{$order->getOriginal('payment_status')}</b> to <b>{$order->payment_status}</b>."));

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
        $type = str_replace('_',' ',$order->service?->type);
        Notification::send($order->user,new UpdateStatusNotification("Your {$type} service '{$order->service?->name}' order status updated from <b>{$order->getOriginal('status')}</b> to <b>{$order->status}</b>."));

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
        return view('backend.service.order-details');
    }
}
