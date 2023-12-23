<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\MyBankInfo as ModelsMyBankInfo;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class MyBankInfo extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $bank = ModelsMyBankInfo::findOrFail($id);
        $bank->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Bank has been deleted!'
        ]);
    }

    #[Title('My Bank Info')]
    public function render()
    {
        return view('backend.buyer.my-bank-info',[
            'banks' => ModelsMyBankInfo::own()->latest()->paginate()
        ]);
    }
}
