<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class AboutUs extends Component
{
    #[Title('About Us')]
    public function render()
    {
        return view('frontend.about-us');
    }
}
