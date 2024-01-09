<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class Footer extends Component
{
    #[Title('Footer')]
    public function render()
    {
        return view('backend.settings.footer');
    }
}
