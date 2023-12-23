<?php

namespace App\Livewire\Backend\Worker;

use App\Models\WorkerRequest;
use Livewire\Component;
use Livewire\Attributes\Title;

class BuyerRequestDetails extends Component
{
    public $request;

    public function mount($id)
    {
        $this->request = WorkerRequest::whereId($id)->firstOrFail();
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

    #[Title('Buyer Request Details')]
    public function render()
    {
        return view('backend.worker.buyer-request-details');
    }
}
