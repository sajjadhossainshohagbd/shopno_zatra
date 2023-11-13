<?php

namespace App\Livewire\Frontend\WorkVisa;

use App\Models\Hajj;
use Livewire\Component;
use App\Models\WorkVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\BalanceCostHistory;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $work;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->work = WorkVisa::findOrFail($id);
    }


    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('work.order',$this->work->id);
    }


    public function render()
    {
        return view('frontend.work-visa.details')->title($this->work->name);
    }
}
