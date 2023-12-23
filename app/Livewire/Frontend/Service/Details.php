<?php

namespace App\Livewire\Frontend\Service;

use App\Models\Service;
use Livewire\Component;
use App\Models\HajjService;
use App\Models\BalanceRequest;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\BalanceCostHistory;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $service;
    public $terms_condition;

    public function mount($id)
    {
        $this->service = Service::where('id', $id)->firstOrFail();
    }

    public function buyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()) {
            return to_route('login');
        }

        return to_route('service.order', $this->service->id);
    }

    public function render()
    {
        return view('frontend.service.details')->title($this->service->name);
    }
}
