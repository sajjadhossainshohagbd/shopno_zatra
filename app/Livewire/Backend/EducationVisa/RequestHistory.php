<?php

namespace App\Livewire\Backend\EducationVisa;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\EducationVisaJobRequest;

class RequestHistory extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = EducationVisaJobRequest::findOrFail($id);
        @unlink(public_path($request->nid));
        @unlink(public_path($request->passport));
        @unlink(public_path($request->experience_certificate));
        @unlink(public_path($request->bank_solvency));
        @unlink(public_path($request->academic_certificate));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Education Visa Request')]
    public function render()
    {
        return view('backend.education-visa.request-history',[
            'histories' => EducationVisaJobRequest::latest()->paginate()
        ]);
    }
}
