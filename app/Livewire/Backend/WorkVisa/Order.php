<?php

namespace App\Livewire\Backend\WorkVisa;

use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Work Visa Orders')]
    public function render()
    {
        return view('backend.work-visa.order',[
            'orders' => WorkOrder::latest()->paginate()
        ]);
    }
}
