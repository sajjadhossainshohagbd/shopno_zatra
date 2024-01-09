<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class PaymentSection extends Component
{
    #[Title('Payment Section')]
    public function render()
    {
        return view('backend.settings.payment-section');
    }
}
