<?php

namespace App\Livewire\Backend\Hajj;

use App\Models\HajjOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Hajj Visa Orders')]
    public function render()
    {
        return view('backend.hajj.order',[
            'orders' => HajjOrder::latest()->paginate()
        ]);
    }
}
