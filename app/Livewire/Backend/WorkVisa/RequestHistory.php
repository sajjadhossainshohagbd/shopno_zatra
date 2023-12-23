<?php

namespace App\Livewire\Backend\WorkVisa;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Models\WorkVisaJobRequest;
use Livewire\WithPagination;

class RequestHistory extends Component
{
    use WithPagination;
    
    public function delete($id)
    {
        $request = WorkVisaJobRequest::findOrFail($id);
        @unlink(public_path($request->nid));
        @unlink(public_path($request->passport));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Request History')]
    public function render()
    {
        return view('backend.work-visa.request-history',[
            'histories' => WorkVisaJobRequest::latest()->paginate()
        ]);
    }
}
