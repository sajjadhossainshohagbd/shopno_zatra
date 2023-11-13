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

    public function mount($id)
    {
        $this->service = Service::where('id', $id)->firstOrFail();
    }

    public function buyNow()
    {
        if(!auth()->check()) {
            return to_route('login');
        }

        if($this->service->price > auth()->user()->balance) {
            return to_route('services.details', $this->service->id)->with('error', 'Insufficient fund!');
        }

        $history = new BalanceCostHistory();
        $history->user_id = auth()->id();
        $history->service_id = $this->service->id;
        $history->service_price = $this->service->price;
        $history->status = 'pending';
        $history->save();

        Auth::user()->decrement('balance', $history->service_price);

        return to_route('services.details', $this->service->id)->with('success', 'Service purchased successfully!');
    }

    public function render()
    {
        return view('frontend.service.details')->title($this->service->name);
    }
}
