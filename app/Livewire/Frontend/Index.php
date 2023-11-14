<?php

namespace App\Livewire\Frontend;

use App\Models\Hajj;
use App\Models\HajjService;
use App\Models\VideoSection;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Index extends Component
{
    #[Computed(cache: true)]
    public function sections()
    {
        return VideoSection::all();
    }

    public function render()
    {
        return view('frontend.index');
    }
}
