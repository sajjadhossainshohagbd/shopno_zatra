<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Buyer Dashboard')]
    public function render()
    {
        return view('backend.buyer.dashboard');
    }
}
