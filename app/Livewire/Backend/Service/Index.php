<?php

namespace App\Livewire\Backend\Service;

use App\Models\Hajj;
use App\Models\Service;
use Livewire\Component;
use App\Models\HajjService;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public $type;

    public function mount($type)
    {
        $this->type = request('type');
    }

    public function delete($id)
    {
        $service = Service::find($id);
        @unlink(public_path($service->thumbnail));
        $service->delete();

        return to_route('services.index',$this->type)->with('success','Service deleted successfully!');
    }

    #[Title('Services')]
    public function render()
    {
        return view('backend.service.index',[
            'services' => Service::where('type',$this->type)->latest()->paginate()
        ]);
    }
}
