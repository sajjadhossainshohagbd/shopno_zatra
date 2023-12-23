<?php

namespace App\Livewire\Frontend\User\Korea;

use Livewire\Component;
use App\Models\BankInfo;
use Livewire\WithFileUploads;
use App\Models\BalanceRequest;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class DepositRequest extends Component
{
    use WithFileUploads;

    #[Locked]
    public $banks = [];

    public $country,$bank,$method,$amount,$voucher,$date_of_payment,$transaction_id;


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
            'voucher' => 'required|mimes:jpg'
        ]);

        $request = new BalanceRequest();
        $request->user_id = auth()->id();
        $request->bank_id = $this->bank;
        $request->method = $this->method;
        $request->amount = $this->amount;
        $request->date_of_payment = $this->date_of_payment;
        $request->transaction_id = $this->transaction_id;
        $request->voucher = $this->voucher->store('uploads/voucher/','public');
        $request->type = 'deposit';
        $request->status = 'pending';
        $request->save();

        return to_route('user.korea.deposit.request')->with('success','Deposit requested successfully!');
    }

    #[Title('Korea Deposit Request')]
    public function render()
    {
        return view('frontend.user.korea.deposit-request',[
            'countries' => BankInfo::pluck('country')->unique()
        ]);
    }
}
