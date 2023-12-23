<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use Livewire\Attributes\Title;

class MyBalance extends Component
{
    #[Title('My Balance')]
    public function render()
    {
        return view('backend.buyer.my-balance');
    }
}
