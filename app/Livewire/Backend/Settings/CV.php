<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class CV extends Component
{
    #[Title('CV')]
    public function render()
    {
        return view('backend.settings.c-v');
    }
}
