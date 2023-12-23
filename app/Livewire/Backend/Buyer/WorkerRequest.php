<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\User;
use App\Models\WorkerRequest as ModelsWorkerRequest;
use Livewire\Component;
use Livewire\Attributes\Title;

class WorkerRequest extends Component
{
    public $worker;
    public $description;

    public function mount($id)
    {
        $this->worker = User::findOrFail($id);
    }

    public function save()
    {
        $this->validate([
            'description' => 'required'
        ]);

        $request = new ModelsWorkerRequest();
        $request->user_id = $this->worker->id;
        $request->buyer_id = auth()->id();
        $request->description = $this->description;
        $request->save();

        session()->flash('success','Worker request sent successfully!');

        return redirect(route('buyer.find.worker'));
    }

    #[Title('Worker Request')]
    public function render()
    {
        return view('backend.buyer.worker-request');
    }
}
