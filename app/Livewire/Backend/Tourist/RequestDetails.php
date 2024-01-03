<?php

namespace App\Livewire\Backend\Tourist;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Models\HolidayPackRequest;
use App\Models\TouristRequest;

class RequestDetails extends Component
{
    #[Locked]
    public $request;

    public function mount($id)
    {
        $this->request = TouristRequest::findOrFail($id);
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
        return view('backend.tourist.request-details');
    }
}