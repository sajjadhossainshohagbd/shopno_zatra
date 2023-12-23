<?php

namespace App\Livewire\Backend\Agent;

use App\Models\MyBankInfo;
use Livewire\Component;
use Livewire\Attributes\Title;

class EditBank extends Component
{
    public $bank;
    public $bank_name;
    public $account_name;
    public $account_number;
    public $routing_number;
    public $account_type;

    public function mount($id)
    {
        $this->bank = MyBankInfo::findOrFail($id);
        $this->bank_name = $this->bank->name;
        $this->account_name = $this->bank->account_name;
        $this->account_number = $this->bank->account_number;
        $this->routing_number = $this->bank->routing_number;
        $this->account_type = $this->bank->account_type;
    }

    public function save()
    {
        $this->validate([
            'bank_name' => 'required',
            'account_type' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'routing_number' => 'required',
        ]);

        $bank = $this->bank;
        $bank->name = $this->bank_name;
        $bank->account_name = $this->account_name;
        $bank->account_number = $this->account_number;
        $bank->routing_number = $this->routing_number;
        $bank->account_type = $this->account_type;
        $bank->save();

        return to_route('b2b.my.bank.info')->with('success', 'Bank added successfully!');
    }

    #[Title('Edit Bank')]
    public function render()
    {
        return view('backend.agent.edit-bank');
    }
}
