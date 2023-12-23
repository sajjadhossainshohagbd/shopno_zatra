<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\Buyer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class RequestList extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $request = Buyer::whereStatus('pending')->whereId($id)->firstOrFail();
        @unlink(public_path($request->bank_statement));
        @unlink(public_path($request->trade));
        $request->user?->delete();
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Buyer request deleted!'
        ]);
    }

    #[Title('Request List')]
    public function render()
    {
        return view('backend.buyer.request-list',[
            'requests' => Buyer::with('user')->whereStatus('pending')->latest()->paginate()
        ]);
    }
}
