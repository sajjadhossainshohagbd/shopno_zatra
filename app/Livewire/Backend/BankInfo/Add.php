<?php

namespace App\Livewire\Backend\BankInfo;

use App\Models\BankInfo;
use Livewire\Component;
use Livewire\Attributes\Title;

class Add extends Component
{
    public $country;
    public $bank_name;
    public $bank_address;
    public $account_name;
    public $account_number;
    public $routing_number;

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

        $bank = new BankInfo();
        $bank->country = $this->country;
        $bank->bank_name = $this->bank_name;
        $bank->bank_address = $this->bank_address;
        $bank->account_name = $this->account_name;
        $bank->account_number = $this->account_number;
        $bank->routing_number = $this->routing_number;
        $bank->account_type = 'business_account';
        $bank->save();

        return to_route('bank.info.index')->with('success', 'Bank added successfully!');
    }

    #[Title('Add Bank')]
    public function render()
    {
        return view('backend.bank-info.add');
    }
}
