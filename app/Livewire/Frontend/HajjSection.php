<?php

namespace App\Livewire\Frontend;

use App\Models\Hajj;
use App\Models\Service;
use Livewire\Component;
use App\Models\HajjService;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class HajjSection extends Component
{
    #[Locked]
    public $hajj = [];

    #[Locked]
    public $umrah = [];

    public $hajjTab = 'umrah';
    public $serviceId;

    public function setService($id)
    {
        $this->serviceId = $id;
    }

    public function mount()
    {
        $this->umrah = $this->getData('umrah');
    }

    public function loadHajj()
    {
        $this->hajj = $this->getData('hajj');
    }

    public function switchHajjTab($tab)
    {
        $this->hajjTab = $tab;
        $this->loadHajj();
    }

    public function getData($type)
    {
        return Hajj::where('type',$type)->get();
    }

    public function render()
    {
        return view('frontend.hajj-section',[
            'hajj_services' => Service::hajj()->latest()->get()
        ]);
    }
}
