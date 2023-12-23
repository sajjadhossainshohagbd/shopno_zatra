<?php

namespace App\Livewire\Backend\Agent;

use App\Models\Agent;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class AgentList extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $user = User::findOrFail($id); 
        @unlink(public_path($user->agent?->logo));
        @unlink(public_path($user->agent?->trade_license));
        @unlink(public_path($user->agent?->tin));
        @unlink(public_path($user->agent?->nid_front));
        @unlink(public_path($user->agent?->nid_back));
        $user->agent?->delete();
        $user->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Agent deleted!'
        ]);
    }

    #[Title('Agent List')]
    public function render()
    {
        return view('backend.agent.agent-list',[
            'agents' => User::with('agent')->whereHas('agent',function($query){
                $query->where('status','approved');
            })->whereRole('agent')->paginate()
        ]);
    }
}
