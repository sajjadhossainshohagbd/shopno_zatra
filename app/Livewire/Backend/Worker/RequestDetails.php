<?php

namespace App\Livewire\Backend\Worker;

use App\Models\Worker;
use Livewire\Component;
use Livewire\Attributes\Title;

class RequestDetails extends Component
{
    public $request;

    public function mount($id)
    {
        $this->request = Worker::whereId($id)->firstOrFail();
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
        return view('backend.worker.request-details');
    }
}
