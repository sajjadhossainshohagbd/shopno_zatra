<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use App\Models\MyBankInfo;
use Livewire\Attributes\Title;

class AddBank extends Component
{
    public $bank_name;
    public $account_name;
    public $account_number;
    public $routing_number;
    public $account_type;

    public function save()
    {
        $this->validate([
            'bank_name' => 'required',
            'account_type' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'routing_number' => 'required',
        ]);

        $bank = new MyBankInfo();
        $bank->user_id = auth()->id();
        $bank->name = $this->bank_name;
        $bank->account_name = $this->account_name;
        $bank->account_number = $this->account_number;
        $bank->routing_number = $this->routing_number;
        $bank->account_type = $this->account_type;
        $bank->save();

        return to_route('buyer.my.bank.info')->with('success', 'Bank added successfully!');
    }

    #[Title('Add Bank')]
    public function render()
    {
        return view('backend.buyer.add-bank');
    }
}
