<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class PrivacyPolicy extends Component
{
    #[Title('Privacy Policy')]
    public function render()
    {
        return view('frontend.privacy-policy');
    }
}
