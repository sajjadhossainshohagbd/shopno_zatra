<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use App\Models\BankInfo;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\BalanceTransfer as ModelsBalanceTransfer;

#[Layout('frontend.layouts.app')]
class BalanceTransfer extends Component
{
    use WithFileUploads;

    #[Locked]
    public $banks = [];

    public $country,$bank,$amount,$account_type,$receiver_account_number,$sender_document,$receiver_document,$purpose;


    public function searchBank($country)
    {
        $this->country = $country;
        $this->banks = BankInfo::where('country',$country)->get();
    }

    public function submit()
    {
        $this->validate([
            'country' => 'required',
            'bank' => 'required|exists:bank_infos,id',
            'amount' => 'required',
            'account_type' => 'required',
            'receiver_account_number' => 'required',
            'purpose' => 'nullable',
            'sender_document' => 'required|mimes:jpg',
            'receiver_document' => 'required|mimes:jpg'
        ]);

        if(auth()->user()->balance < $this->amount){
            return to_route('user.balance.transfer')->with('error','Insufficient fund!');
        }

        auth()->user()->decrement('balance',$this->amount);
        
        $transfer = new ModelsBalanceTransfer();
        $transfer->user_id = auth()->id();
        $transfer->bank_id = $this->bank;
        $transfer->account_type = $this->account_type;
        $transfer->account_number = $this->receiver_account_number;
        $transfer->amount = $this->amount;
        $transfer->purpose = $this->purpose;
        $transfer->sender_document = $this->sender_document->store('uploads/sender_document/','public');
        $transfer->receiver_document = $this->receiver_document->store('uploads/receiver_document/','public');
        $transfer->status = 'pending';
        $transfer->save();

        return to_route('user.balance.transfer')->with('success','Balance transfer requested successfully!');
    }

    #[Title('Balance Transfer')]
    public function render()
    {
        return view('frontend.user.balance-transfer',[
            'countries' => BankInfo::pluck('country')->unique()
        ]);
    }
}
