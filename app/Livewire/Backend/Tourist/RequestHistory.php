<?php

namespace App\Livewire\Backend\Tourist;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\HolidayPackRequest;
use App\Models\TouristRequest;

class RequestHistory extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = TouristRequest::findOrFail($id);
        @unlink(public_path($request->nid));
        @unlink(public_path($request->passport));
        @unlink(public_path($request->police_clearance));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Tourist Pack Request')]
    public function render()
    {
        return view('backend.tourist.request-history',[
            'histories' => TouristRequest::latest()->paginate()
        ]);
    }
}
