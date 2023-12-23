<?php

namespace App\Livewire\Frontend\WorkVisa;

use Livewire\Component;
use App\Models\WorkVisa;
use App\Models\WorkOrder;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Order extends Component
{
    use WithFileUploads;

    #[Locked]
    public $work;

    public $name;
    public $phone;
    public $address;
    public $guardian_name;
    public $guardian_phone;
    public $nid;
    public $passport;
    public $payment_receipt;

    public function mount($id)
    {
        $this->work = WorkVisa::findOrFail($id);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'guardian_name' => 'required',
            'guardian_phone' => 'required',
            'nid' => 'required|mimes:jpg',
            'passport' => 'required|mimes:jpg',
            'payment_receipt' => 'nullable|mimes:jpg'
        ]);

        $order = new WorkOrder();
        $order->user_id = auth()->id();
        $order->work_id = $this->work->id;
        $order->name = $this->name;
        $order->address = $this->address;
        $order->phone = $this->phone;
        $order->guardian_name = $this->guardian_name;
        $order->guardian_phone = $this->guardian_phone;
        $order->nid = $this->nid->store('uploads/nid','public');
        $order->passport = $this->passport->store('uploads/passport','public');
        $order->payment_receipt = $this->payment_receipt?->store('uploads/payment_receipt','public');
        $price = auth()->user()->role == 'agent' ? $this->work->b2b_price : $this->work->price;
        if(auth()->user()->balance >= $price){
            auth()->user()->decrement('balance',$price);
            $order->payment_status = 'paid';
        }else{
            $order->payment_status = 'unpaid';
        }
        $order->price = $price;
        $order->save();

        return to_route('work.visa.details',$this->work->id)
                ->with('success','Order placed successfully!');
    }

    #[Title('Apply Now')]
    public function render()
    {
        return view('frontend.work-visa.order');
    }
}
