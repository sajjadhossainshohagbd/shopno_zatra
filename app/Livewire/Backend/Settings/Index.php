<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class Index extends Component
{
    #[Title('Settings')]
    public function render()
    {
        return view('backend.settings.index');
    }
}
