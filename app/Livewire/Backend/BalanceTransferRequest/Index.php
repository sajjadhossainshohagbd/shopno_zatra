<?php

namespace App\Livewire\Backend\BalanceTransferRequest;

use App\Models\BalanceTransfer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public $type;

    public function mount()
    {
        $this->type = request('type');
    }

    public function delete($id)
    {
        $request = BalanceTransfer::findOrFail($id);
        @unlink(public_path($request->voucher));
        $request->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Request has been deleted!'
        ]);
    }

    #[Title('Balance Transfer')]
    public function render()
    {
        return view('backend.balance-transfer-request.index',[
            'requests' => BalanceTransfer::with('user')->when($this->type,function($query){
                $query->where('status',$this->type);
            })->latest()->paginate()
        ]);
    }
}
