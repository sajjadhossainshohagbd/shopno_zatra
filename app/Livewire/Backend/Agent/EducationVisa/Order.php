<?php

namespace App\Livewire\Backend\Agent\EducationVisa;

use Livewire\Component;
use App\Models\EducationOrder;
use Livewire\Attributes\Title;

class Order extends Component
{
    
    #[Title('Education Visa Orders')]
    public function render()
    {
        return view('backend.agent.education-visa.order',[
            'orders' => EducationOrder::own()->latest()->paginate()
        ]);
    }
}
