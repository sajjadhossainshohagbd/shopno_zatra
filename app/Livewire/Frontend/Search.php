<?php

namespace App\Livewire\Frontend;

use App\Models\Hajj;
use App\Models\Holiday;
use App\Models\Service;
use App\Models\Tourist;
use Livewire\Component;
use App\Models\WorkVisa;
use App\Models\MedicalVisa;
use App\Models\EducationVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Search extends Component
{
    public $query;

    public function mount($query)
    {
        $this->query = $query;
    }

    #[Title('Search')]
    public function render()
    {
        $data['hajj_visa'] = Hajj::where('package_name','LIKE',"%{$this->query}%")->whereType('hajj')->get();
        $data['umrah_visa'] = Hajj::where('package_name','LIKE',"%{$this->query}%")->whereType('umrah')->get();
        $data['tourist_visa'] = Tourist::where('name','LIKE',"%{$this->query}%")->get();
        $data['work_visa'] = WorkVisa::where('name','LIKE',"%{$this->query}%")->get();
        $data['education_visa'] = EducationVisa::where('name','LIKE',"%{$this->query}%")->get();
        $data['medical_visa'] = MedicalVisa::where('name','LIKE',"%{$this->query}%")->get();
        $data['holiday_pack'] = Holiday::where('name','LIKE',"%{$this->query}%")->get();
        $data['services'] = Service::where('name','LIKE',"%{$this->query}%")->get();

        return view('frontend.search',$data);
    }
}
