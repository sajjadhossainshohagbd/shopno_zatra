<?php

namespace App\Livewire\Frontend\EducationVisa;

use App\Models\EducationOrder;
use App\Models\EducationVisa;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Order extends Component
{
    use WithFileUploads;

    #[Locked]
    public $education;

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
        $this->education = EducationVisa::findOrFail($id);
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

        $order = new EducationOrder();
        $order->user_id = auth()->id();
        $order->education_id = $this->education->id;
        $order->name = $this->name;
        $order->address = $this->address;
        $order->phone = $this->phone;
        $order->guardian_name = $this->guardian_name;
        $order->guardian_phone = $this->guardian_phone;
        $order->nid = $this->nid->store('uploads/nid','public');
        $order->passport = $this->passport->store('uploads/passport','public');
        $order->payment_receipt = $this->payment_receipt?->store('uploads/payment_receipt','public');
        $price = auth()->user()->role == 'agent' ? $this->education->b2b_price : $this->education->price;
        if(auth()->user()->balance >= $price){
            auth()->user()->decrement('balance',$price);
            $order->payment_status = 'paid';
        }else{
            $order->payment_status = 'unpaid';
        }
        $order->price = $price;
        $order->save();

        return to_route('education.visa.details',$this->education->id)
                ->with('success','Order placed successfully!');
    }

    #[Title('Apply Now')]
    public function render()
    {
        return view('frontend.education-visa.order');
    }
}
