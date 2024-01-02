<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Office;
use Livewire\Component;
use Livewire\Attributes\Title;

class Footer extends Component
{
    public $bangladesh_office;
    public $abroad_office;

    public function render()
    {
        return view('frontend.inc.footer',[
            'bangladesh_offices' => Office::whereType('bangladesh')->get(),
            'abroad_offices' => Office::whereType('abroad')->get()
        ]);
    }
}
