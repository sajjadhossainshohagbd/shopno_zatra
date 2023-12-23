<?php

namespace App\Livewire\Backend\Agent\WorkVisa;

use Livewire\Component;
use App\Models\WorkOrder;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Work Visa Orders')]
    public function render()
    {
        return view('backend.agent.work-visa.order',[
            'orders' => WorkOrder::own()->latest()->paginate()
        ]);
    }
}
