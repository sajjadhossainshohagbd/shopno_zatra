<?php

namespace App\Livewire\Backend\Worker;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

class WorkerList extends Component
{
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->worker?->delete();
        $user->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Worker deleted!'
        ]);
    }

    #[Title('Worker List')]
    public function render()
    {
        return view('backend.worker.worker-list',[
            'workers' => User::with('worker')->whereHas('worker',function($query){
                $query->where('status','approved');
            })->whereRole('worker')->paginate()
        ]);
    }
}
