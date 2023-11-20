<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class ContactUs extends Component
{
    #[Title('Title')]
    public function render()
    {
        return view('backend.settings.contact-us');
    }
}
