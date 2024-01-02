<?php

namespace App\Livewire\Frontend\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('frontend.layouts.app')]
class Index extends Component
{
    use WithPagination;

    public $type;

    public function mount($type)
    {
        $this->type = $type;
    }

    #[Title('Services')]
    public function render()
    {
        return view('frontend.service.index',[
            'services' => Service::whereType($this->type)->paginate()
        ]);
    }
}
