<?php

namespace App\Livewire\Backend\Agent;

use App\Models\BankInfo as ModelsBankInfo;
use Livewire\Component;
use Livewire\Attributes\Title;

class BankInfo extends Component
{
    #[Title('Bank Info')]
    public function render()
    {
        return view('backend.agent.bank-info',[
            'infos' => ModelsBankInfo::latest()->get()
        ]);
    }
}
