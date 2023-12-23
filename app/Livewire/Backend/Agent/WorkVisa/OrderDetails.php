<?php

namespace App\Livewire\Backend\Agent\WorkVisa;

use Livewire\Component;
use App\Models\WorkOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public $reason;

    public function mount($id)
    {
        $this->order = WorkOrder::own()->findOrFail($id);
        $this->reason = $this->order->reason;
    }

    #[Title('Work Visa Details')]
    public function render()
    {
        return view('backend.agent.work-visa.order-details');
    }
}
