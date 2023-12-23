<?php

namespace App\Livewire\Backend\Holiday;

use App\Livewire\Backend\Accounts\HolidayPack;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\HolidayPackRequest;

class RequestHistory extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = HolidayPackRequest::findOrFail($id);
        @unlink(public_path($request->nid));
        @unlink(public_path($request->passport));
        @unlink(public_path($request->police_clearance));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Holiday Pack Request')]
    public function render()
    {
        return view('backend.holiday.request-history',[
            'histories' => HolidayPackRequest::latest()->paginate()
        ]);
    }
}
