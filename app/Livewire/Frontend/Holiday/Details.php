<?php

namespace App\Livewire\Frontend\Holiday;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $visa;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->visa = Holiday::findOrFail($id);
    }


    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('holiday.order',$this->visa->id);
    }

    #[Title('Apply Now')]
    public function render()
    {
        return view('frontend.holiday.details');
    }
}
