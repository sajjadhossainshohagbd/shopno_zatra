<?php

namespace App\Livewire\Frontend;

use App\Models\Hajj;
use App\Models\HajjService;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Index extends Component
{

    public function render()
    {
        return view('frontend.index');
    }
}
