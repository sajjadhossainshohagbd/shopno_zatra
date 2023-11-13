<?php

namespace App\Livewire\Backend\EducationVisa;

use App\Models\EducationOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    #[Title('Education Visa Orders')]
    public function render()
    {
        return view('backend.education-visa.order',[
            'orders' => EducationOrder::latest()->paginate()
        ]);
    }
}
