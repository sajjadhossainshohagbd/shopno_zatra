<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BalanceRequest;
use Livewire\Attributes\Title;

class RequestHistory extends Component
{
    use WithPagination;

    #[Title('Request History')]
    public function render()
    {
        return view('backend.buyer.request-history',[
            'histories' => BalanceRequest::with('bank')->own()->latest()->paginate()
        ]);
    }
}
