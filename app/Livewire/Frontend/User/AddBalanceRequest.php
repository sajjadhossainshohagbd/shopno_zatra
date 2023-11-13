<?php

namespace App\Livewire\Frontend\User;

use App\Models\BalanceRequest;
use Livewire\Component;
use App\Models\BankInfo;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\WithFileUploads;

#[Layout('frontend.layouts.app')]
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
            'document' => 'required|mimes:jpg',
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
        $request->document = $this->document->store('uploads/documents/','public');
        $request->voucher = $this->voucher->store('uploads/voucher/','public');
        $request->status = 'pending';
        $request->save();

        return to_route('user.add.balance.request')->with('success','Balance requested successfully!');
    }

    #[Title('Add Balance Request')]
    public function render()
    {
        return view('frontend.user.add-balance-request',[
            'countries' => BankInfo::pluck('country')->unique()
        ]);
    }
}
