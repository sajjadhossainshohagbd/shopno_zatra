<?php

namespace App\Livewire\Backend\MedicalVisa;

use App\Models\MedicalVisa;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $visa = MedicalVisa::find($id);
       @unlink(public_path($visa->thumbnail));
       $visa->delete();
    }

    #[Title('Medical Visa')]
    public function render()
    {
        return view('backend.medical-visa.index',[
            'medicals' => MedicalVisa::latest()->paginate()
        ]);
    }
}
