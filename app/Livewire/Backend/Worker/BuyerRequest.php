<?php

namespace App\Livewire\Backend\Worker;

use App\Models\Buyer;
use App\Models\User;
use App\Models\WorkerRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class BuyerRequest extends Component
{
    use WithPagination;
    public function delete($id)
    {
        $request = WorkerRequest::whereId($id)->firstOrFail();

        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Buyer request deleted!'
        ]);
    }

    #[Title('Buyer Requests')]
    public function render()
    {
        return view('backend.worker.buyer-request',[
            'requests' => WorkerRequest::with('user','user.worker')->paginate()
        ]);
    }
}
