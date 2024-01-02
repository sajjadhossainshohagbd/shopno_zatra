<?php

namespace App\Livewire\Frontend;

use App\Models\Hajj;
use App\Models\Holiday;
use App\Models\Service;
use App\Models\Tourist;
use Livewire\Component;
use App\Models\WorkVisa;
use App\Models\HajjService;
use App\Models\MedicalVisa;
use App\Models\VideoSection;
use App\Models\EducationVisa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Illuminate\Support\Benchmark;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Cache;

#[Layout('frontend.layouts.app')]
class Index extends Component
{

    public function render()
    {

        $services = Service::select('type')->groupBy('type')->get()->map(function ($item) {
            $typeData = Service::where('type', $item->type)->get();
            return [
                'type' => $item->type,
                'services' => $typeData->toArray(),
            ];
        });

        $offer_count = array_sum([
            Tourist::count(),
            Hajj::count(),
            WorkVisa::count(),
            EducationVisa::count(),
            MedicalVisa::count(),
            Holiday::count(),
        ]);

        return view('frontend.index',compact('services','offer_count'));
    }
}
