<?php

namespace App\Livewire\Backend\Page;

use Livewire\Component;
use Livewire\Attributes\Title;

class ContactUs extends Component
{
    #[Title('Contact Us')]
    public function render()
    {
        return view('backend.page.contact-us');
    }
}
