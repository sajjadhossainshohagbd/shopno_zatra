<?php

namespace App\Livewire\Backend\Agent;

use App\Models\Agent;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class RequestList extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = Agent::whereStatus('pending')->whereId($id)->firstOrFail();
        @unlink(public_path($request->logo));
        @unlink(public_path($request->trade_license));
        @unlink(public_path($request->tin));
        @unlink(public_path($request->nid_front));
        @unlink(public_path($request->nid_back));
        $request->user?->delete();
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Agent request deleted!'
        ]);
    }

    #[Title('Request List')]
    public function render()
    {
        return view('backend.agent.request-list',[
            'requests' => Agent::with('user')->whereStatus('pending')->latest()->paginate()
        ]);
    }
}
