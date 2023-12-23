<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\WorkerRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class WorkerRequestHistory extends Component
{
    use WithPagination;

    #[Title('Worker Request History')]
    public function render()
    {
        return view('backend.buyer.worker-request-history',[
            'requests' => WorkerRequest::with('user','user.worker')->where('buyer_id',auth()->id())->paginate()
        ]);
    }
}
