<?php

namespace App\Livewire\Backend\Holiday;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Models\HolidayPackRequest;

class RequestDetails extends Component
{
    #[Locked]
    public $request;

    public function mount($id)
    {
        $this->request = HolidayPackRequest::findOrFail($id);
    }

    public function updateStatus($status)
    {
        $request = $this->request;
        $request->status = $status;
        $request->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Status update to '.ucfirst($status)
        ]);
    }

    #[Title('Request Details')]
    public function render()
    {
        return view('backend.holiday.request-details');
    }
}
