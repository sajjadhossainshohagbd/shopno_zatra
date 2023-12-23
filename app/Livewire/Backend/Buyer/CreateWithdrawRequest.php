<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use App\Models\MyBankInfo;
use Livewire\Attributes\Title;
use App\Models\BalanceWithdraw;

class CreateWithdrawRequest extends Component
{
    public $bank;
    public $amount;

    public function submit()
    {
        $this->validate([
            'bank' => 'required|exists:my_bank_infos,id',
            'amount' => 'required',
        ]);

        if(auth()->user()->balance < $this->amount){
            return to_route('buyer.create.withdraw.request')->with('error','Insufficient fund!');
        }

        auth()->user()->decrement('balance',$this->amount);

        $withdraw = new BalanceWithdraw();
        $withdraw->user_id = auth()->id();
        $withdraw->bank_id = $this->bank;
        $withdraw->amount = $this->amount;
        $withdraw->status = 'pending';
        $withdraw->save();

        return to_route('buyer.create.withdraw.request')->with('success','Withdraw requested successfully!');
    }

    #[Title('Create Withdraw Request')]
    public function render()
    {
        return view('backend.buyer.create-withdraw-request',[
            'banks' => MyBankInfo::get()
        ]);
    }
}