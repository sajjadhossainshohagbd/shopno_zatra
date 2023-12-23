<?php

namespace App\Livewire\Backend\Agent\HolidayPack;

use Livewire\Component;
use App\Models\HolidayOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public function mount($id)
    {
        $this->order = HolidayOrder::own()->findOrFail($id);
    }

    #[Title('Holiday Order Details')]
    public function render()
    {
        return view('backend.agent.holiday-pack.order-details');
    }
}
