<?php

namespace App\Livewire\Backend\Agent;

use App\Models\BalanceTransfer;
use App\Models\BalanceWithdraw;
use Livewire\Component;
use Livewire\Attributes\Title;

class WithdrawRequestHistory extends Component
{
    #[Title('Withdraw History')]
    public function render()
    {
        return view('backend.agent.withdraw-request-history',[
            'histories' => BalanceWithdraw::own()->latest()->paginate()
        ]);
    }
}
