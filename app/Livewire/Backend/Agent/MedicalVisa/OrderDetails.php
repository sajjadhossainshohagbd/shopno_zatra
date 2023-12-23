<?php

namespace App\Livewire\Backend\Agent\MedicalVisa;

use Livewire\Component;
use App\Models\MedicalOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public function mount($id)
    {
        $this->order = MedicalOrder::own()->findOrFail($id);
    }

    #[Title('Medical Visa Order Details')]
    public function render()
    {
        return view('backend.agent.medical-visa.order-details');
    }
}
