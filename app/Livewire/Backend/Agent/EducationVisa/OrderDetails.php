<?php

namespace App\Livewire\Backend\Agent\EducationVisa;

use Livewire\Component;
use App\Models\EducationOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class OrderDetails extends Component
{
    #[Locked]
    public $order;

    public function mount($id)
    {
        $this->order = EducationOrder::own()->findOrFail($id);
    }

    #[Title('Education Visa Details')]
    public function render()
    {
        return view('backend.agent.education-visa.order-details');
    }
}
