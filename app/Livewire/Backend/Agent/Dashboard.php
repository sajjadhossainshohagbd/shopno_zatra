<?php

namespace App\Livewire\Backend\Agent;

use App\Models\EducationOrder;
use App\Models\HajjOrder;
use App\Models\HolidayOrder;
use App\Models\MedicalOrder;
use App\Models\MedicalVisa;
use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('backend.agent.dashboard',[
            'hajj' => HajjOrder::own()->count(),
            'work' => WorkOrder::own()->count(),
            'education' => EducationOrder::own()->count(),
            'medical' => MedicalOrder::own()->count(),
            'holiday' => HolidayOrder::own()->count(),
        ]);
    }
}
