<?php

namespace App\Livewire\Backend\BankInfo;

use Livewire\Component;
use App\Models\BankInfo;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    #[Locked]
    public $bank;

    public $country;
    public $bank_name;
    public $bank_address;
    public $account_name;
    public $account_number;
    public $routing_number;

    public function mount($id)
    {
        $this->bank = BankInfo::findOrFail($id);
        $this->country = $this->bank->country;
        $this->bank_name = $this->bank->bank_name;
        $this->bank_address = $this->bank->bank_address;
        $this->account_name = $this->bank->account_name;
        $this->account_number = $this->bank->account_number;
        $this->routing_number = $this->bank->routing_number;
    }

    public function save()
    {
        $this->validate([
            'bank_name' => 'required',
            'country' => 'required',
            'bank_address' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'routing_number' => 'required',
        ]);

        $bank = $this->bank;
        $bank->country = $this->country;
        $bank->bank_name = $this->bank_name;
        $bank->bank_address = $this->bank_address;
        $bank->account_name = $this->account_name;
        $bank->account_number = $this->account_number;
        $bank->routing_number = $this->routing_number;
        $bank->account_type = 'business_account';
        $bank->save();

        return to_route('bank.info.index')->with('success', 'Bank updated successfully!');
    }

    #[Title('Update Bank')]
    public function render()
    {
        return view('backend.bank-info.edit');
    }
}
