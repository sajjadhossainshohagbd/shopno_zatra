<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class Services extends Component
{
    #[Title('Services')]
    public function render()
    {
        return view('backend.settings.services');
    }
}
