<?php

namespace App\Livewire\Backend\Agent\HolidayPack;

use Livewire\Component;
use App\Models\HolidayOrder;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Holiday Pack Orders')]
    public function render()
    {
        return view('backend.agent.holiday-pack.order',[
            'orders' => HolidayOrder::own()->latest()->paginate()
        ]);
    }
}
