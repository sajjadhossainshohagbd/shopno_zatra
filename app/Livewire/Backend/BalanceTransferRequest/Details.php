<?php

namespace App\Livewire\Backend\BalanceTransferRequest;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\BalanceTransfer;
use Livewire\Attributes\Locked;

class Details extends Component
{
    #[Locked]
    public $balance;


    public function mount($id)
    {
        $this->balance = BalanceTransfer::findOrFail($id);
    }

    public function updateStatus($status)
    {
        $balance = $this->balance;
        $balance->status = $status;
        $balance->save();

        if($status == 'cancelled'){
            $balance->user?->increment('balance',$this->balance->amount);
        }

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    #[Title('Balance Transfer Details')]
    public function render()
    {
        return view('backend.balance-transfer-request.details');
    }
}
