<?php

namespace App\Livewire\Backend\BalanceRequest;

use App\Models\BalanceRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Details extends Component
{
    #[Locked]
    public $balance;


    public function mount($id)
    {
        $this->balance = BalanceRequest::findOrFail($id);
    }

    public function updateStatus($status)
    {
        $balance = $this->balance;
        $balance->status = $status;
        $balance->save();

        if($status == 'approved'){
            $balance->user?->increment('balance',$this->balance->amount);
        }

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    #[Title('Balance Request')]
    public function render()
    {
        return view('backend.balance-request.details');
    }
}
