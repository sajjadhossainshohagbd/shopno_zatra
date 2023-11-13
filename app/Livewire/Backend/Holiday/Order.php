<?php

namespace App\Livewire\Backend\Holiday;

use App\Models\HolidayOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Holiday Orders')]
    public function render()
    {
        return view('backend.holiday.order',[
            'orders' => HolidayOrder::latest()->paginate()
        ]);
    }
}
