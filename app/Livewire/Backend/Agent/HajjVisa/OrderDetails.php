<?php

namespace App\Livewire\Backend\Agent\HajjVisa;

use Livewire\Component;
use App\Models\HajjOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public function mount($id)
    {
        $this->order = HajjOrder::findOrFail($id);
    }

    #[Title('Hajj Visa Orders')]
    public function render()
    {
        return view('backend.agent.hajj-visa.order-details');
    }
}
