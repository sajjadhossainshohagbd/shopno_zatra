<?php

namespace App\Livewire\Backend\Buyer;

use Livewire\Component;
use App\Models\BankInfo;
use Livewire\WithFileUploads;
use App\Models\BalanceRequest;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class AddBalanceRequest extends Component
{

    use WithFileUploads;

    #[Locked]
    public $banks = [];

    public $country,$bank,$method,$amount,$voucher,$date_of_payment,$transaction_id,$message,$document;


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
            'method' => 'required',
            'date_of_payment' => 'required',
            'transaction_id'  => 'required',
            'message' => 'nullable',
            'voucher' => 'required|mimes:jpg'
        ]);

        $request = new BalanceRequest();
        $request->user_id = auth()->id();
        $request->bank_id = $this->bank;
        $request->method = $this->method;
        $request->amount = $this->amount;
        $request->date_of_payment = $this->date_of_payment;
        $request->transaction_id = $this->transaction_id;
        $request->message = $this->message;
        $request->voucher = $this->voucher->store('uploads/voucher/','public');
        $request->status = 'pending';
        $request->save();

        return to_route('buyer.create.balance.request')->with('success','Balance requested successfully!');
    }

    #[Title('Add Balance Request')]
    public function render()
    {
        return view('backend.buyer.add-balance-request',[
            'countries' => BankInfo::pluck('country')->unique()
        ]);
    }
}
