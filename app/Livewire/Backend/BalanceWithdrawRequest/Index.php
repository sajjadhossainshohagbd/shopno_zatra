<?php

namespace App\Livewire\Backend\BalanceWithdrawRequest;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\BalanceTransfer;
use App\Models\BalanceWithdraw;

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
        return view('backend.balance-withdraw-request.index',[
            'requests' => BalanceWithdraw::with('user')->when($this->type,function($query){
                $query->where('status',$this->type);
            })->latest()->paginate()
        ]);
    }
}
