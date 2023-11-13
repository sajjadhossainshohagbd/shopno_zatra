<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\BankInfo as Bank;
use Livewire\WithPagination;

#[Layout('frontend.layouts.app')]
class BankInfo extends Component
{

    #[Title('Bank Info')]
    public function render()
    {
        return view('frontend.user.bank-info',[
            'infos' => Bank::get()
        ]);
    }
}
