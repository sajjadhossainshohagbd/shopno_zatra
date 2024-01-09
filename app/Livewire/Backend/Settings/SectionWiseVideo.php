<?php

namespace App\Livewire\Backend\Settings;

use Livewire\Component;
use Livewire\Attributes\Title;

class SectionWiseVideo extends Component
{
    #[Title('Section Wise Video Settings')]
    public function render()
    {
        return view('backend.settings.section-wise-video');
    }
}
