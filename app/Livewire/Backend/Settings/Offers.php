<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class Offers extends Component
{
    #[Title('Offers')]
    public function render()
    {
        return view('backend.settings.offers');
    }
}
