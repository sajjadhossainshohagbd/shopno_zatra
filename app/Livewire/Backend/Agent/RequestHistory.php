<?php

namespace App\Livewire\Backend\Agent;

use App\Models\BalanceRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;  

class RequestHistory extends Component
{
    use WithPagination;

    #[Title('Request History')]
    public function render()
    {
        return view('backend.agent.request-history',[
            'histories' => BalanceRequest::own()->latest()->paginate()
        ]);
    }
}
