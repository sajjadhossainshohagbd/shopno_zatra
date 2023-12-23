<?php

namespace App\Livewire\Backend\Worker;

use App\Models\Worker;
use Livewire\Component;
use Livewire\Attributes\Title;

class RequestList extends Component
{
    #[Title('Worker Request List')]
    public function render()
    {
        return view('backend.worker.request-list',[
            'workers' => Worker::with('user')->whereStatus('pending')->latest()->paginate()
        ]);
    }
}
