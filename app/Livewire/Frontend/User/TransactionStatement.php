<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\BalanceTransfer;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class TransactionStatement extends Component
{
    use WithPagination;

    #[Title('Statement Of Transaction')]
    public function render()
    {
        return view('frontend.user.transaction-statement',[
            'transactions' => BalanceTransfer::own()->latest()->paginate()
        ]);
    }
}
