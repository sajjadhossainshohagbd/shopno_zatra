<?php

namespace App\Livewire\Backend\BankInfo;

use App\Models\BankInfo;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function delete($id)
    {
        $bank = BankInfo::findOrFail($id);
        $bank->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Bank has been deleted!'
        ]);
    }

    #[Title('Bank Info')]
    public function render()
    {
        return view('backend.bank-info.index',[
            'banks' => BankInfo::latest()->paginate()
        ]);
    }
}
