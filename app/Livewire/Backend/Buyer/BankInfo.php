<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\BankInfo as ModelsBankInfo;
use Livewire\Component;
use Livewire\Attributes\Title;

class BankInfo extends Component
{
    #[Title('Bank Info')]
    public function render()
    {
        return view('backend.buyer.bank-info',[
            'infos' => ModelsBankInfo::latest()->get()
        ]);
    }
}
