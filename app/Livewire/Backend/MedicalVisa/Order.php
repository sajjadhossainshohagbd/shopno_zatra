<?php

namespace App\Livewire\Backend\MedicalVisa;

use App\Models\MedicalOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Medical Visa Orders')]
    public function render()
    {
        return view('backend.medical-visa.order',[
        'orders' => MedicalOrder::latest()->paginate()
        ]);
    }
}
