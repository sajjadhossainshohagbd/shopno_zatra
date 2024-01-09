<?php

namespace App\Livewire\Frontend\Tourist;

use App\Models\Tourist;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component 
{
    #[Locked]
    public $pack;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->pack = Tourist::findOrFail($id);
    }

    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('tourist.order',$this->pack->id);
    }

    #[Title('Tourist Details')]
    public function render()
    {
        return view('frontend.tourist.details');
    }
}
