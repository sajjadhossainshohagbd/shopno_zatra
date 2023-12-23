<?php

namespace App\Livewire\Backend\BalanceWithdrawRequest;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\BalanceWithdraw;
use Livewire\Attributes\Locked;

class Details extends Component
{
    #[Locked]
    public $balance;

    public function mount($id)
    {
        $this->balance = BalanceWithdraw::findOrFail($id);
    }

    public function updateStatus($status)
    {
        $balance = $this->balance;
        $balance->status = $status;
        $balance->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    #[Title('Balance Withdraw Details')]
    public function render()
    {
        return view('backend.balance-withdraw-request.details');
    }
}
