<?php

namespace App\Livewire\Backend\Buyer\Pay;

use App\Models\BuyerPay;
use Livewire\Component;
use Livewire\Attributes\Title;

class History extends Component
{
    #[Title('Pay History')]
    public function render()
    {
        return view('backend.buyer.pay.history',[
            'histories' => BuyerPay::own()->latest()->paginate()
        ]);
    }
}
