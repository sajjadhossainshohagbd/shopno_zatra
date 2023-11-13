<?php

namespace App\Livewire\Frontend\Hajj;

use App\Models\Hajj;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\BalanceCostHistory;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $hajj;

    public bool $terms_condition;

    public function mount($type,$id)
    {
        $this->hajj = Hajj::where('type',$type)->where('id',$id)->firstOrFail();
    }

    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('hajj.order',$this->hajj->id);
    }

    public function render()
    {
        return view('frontend.hajj.details')->title($this->hajj->package_name);
    }
}
