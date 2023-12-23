<?php

namespace App\Livewire\Backend\Agent\MedicalVisa;

use Livewire\Component;
use App\Models\MedicalOrder;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Medical Visa Orders')]
    public function render()
    {
        return view('backend.agent.medical-visa.order',[
            'orders' => MedicalOrder::own()->latest()->paginate()
        ]);
    }
}
