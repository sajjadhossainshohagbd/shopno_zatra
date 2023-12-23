<?php

namespace App\Livewire\Backend\Agent\HajjVisa;

use Livewire\Component;
use App\Models\HajjOrder;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Hajj Visa Orders')]
    public function render()
    {
        return view('backend.agent.hajj-visa.order',[
            'orders' => HajjOrder::own()->latest()->paginate()
        ]);
    }
}
