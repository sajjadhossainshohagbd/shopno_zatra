<?php

namespace App\Livewire\Backend\MedicalVisa;

use App\Models\MedicalVisaRequest;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class RequestHistory extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = MedicalVisaRequest::findOrFail($id);
        @unlink(public_path($request->nid));
        @unlink(public_path($request->passport));
        @unlink(public_path($request->previous_report));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Medical Visa Request')]
    public function render()
    {
        return view('backend.medical-visa.request-history',[
            'histories' => MedicalVisaRequest::latest()->paginate()
        ]);
    }
}
