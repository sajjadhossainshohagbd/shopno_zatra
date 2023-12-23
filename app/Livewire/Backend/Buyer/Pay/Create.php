<?php

namespace App\Livewire\Backend\Buyer\Pay;

use Livewire\Component;
use App\Models\BankInfo;
use App\Models\BuyerPay;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Create extends Component
{
    use WithFileUploads;

    #[Locked]
    public $banks = [];

    public $country,$bank,$amount,$voucher,$transaction_id;


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
            'transaction_id'  => 'required',
            'voucher' => 'required|mimes:jpg'
        ]);

        $request = new BuyerPay();
        $request->user_id = auth()->id();
        $request->bank_id = $this->bank;
        $request->amount = $this->amount;
        $request->transaction_id = $this->transaction_id;
        $request->voucher = $this->voucher->store('uploads/voucher/','public');
        $request->status = 'pending';
        $request->save();

        return to_route('buyer.pay.create')->with('success','Pay created successfully!');
    }

    #[Title('Pay')]
    public function render()
    {
        return view('backend.buyer.pay.create',[
            'countries' => BankInfo::pluck('country')->unique()
        ]);
    }
}
