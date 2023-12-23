<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\Buyer;
use Livewire\Component;
use Livewire\Attributes\Title;

class RequestDetails extends Component
{
    public $request;

    public function mount($id)
    {
        $this->request = Buyer::whereStatus('pending')->whereId($id)->firstOrFail();
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
        return view('backend.buyer.request-details');
    }
}
