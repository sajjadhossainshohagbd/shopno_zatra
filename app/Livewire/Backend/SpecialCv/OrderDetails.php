<?php

namespace App\Livewire\Backend\SpecialCv;

use App\Models\CvRequest;
use Livewire\Component;
use App\Models\TouristOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UpdateStatusNotification;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public function mount($id)
    {
        $this->order = CvRequest::findOrFail($id);
    }

    public function updatePaymentStatus($status)
    {
        $order = $this->order;
        $order->payment_status = $status;

        Notification::send($order->user,new UpdateStatusNotification("Your special cv order payment status updated from <b>{$order->getOriginal('payment_status')}</b> to <b>{$order->payment_status}</b>."));

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

        Notification::send($order->user,new UpdateStatusNotification("Your special cv order status updated from <b>{$order->getOriginal('status')}</b> to <b>{$order->status}</b>."));

        $order->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    #[Title('Order Details')]
    public function render()
    {
        return view('backend.special-cv.order-details');
    }
}
