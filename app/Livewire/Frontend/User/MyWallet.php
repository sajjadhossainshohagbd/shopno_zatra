<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class MyWallet extends Component
{
    #[Title('My Wallet')]
    public function render()
    {
        return view('frontend.user.my-wallet');
    }
}
