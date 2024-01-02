<?php

namespace App\Livewire\Frontend\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    public $office;

    public function mount($id)
    {
        $this->office = Office::findOrFail($id);
    }

    #[Title('Office Address')]
    public function render()
    {
        return view('frontend.office.details');
    }
}
