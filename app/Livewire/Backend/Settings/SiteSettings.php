<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class SiteSettings extends Component
{
    #[Title('Site Settings')]
    public function render()
    {
        return view('backend.settings.site-settings');
    }
}
