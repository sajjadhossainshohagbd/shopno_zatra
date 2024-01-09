<?php

namespace App\Livewire\Frontend\Hotel;

use App\Models\Hotel;
use Livewire\Component;
use App\Models\HotelOrder;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Order extends Component
{
    use WithFileUploads;

    #[Locked]
    public $hotel;

    public $name;
    public $phone;
    public $address;
    public $nid;
    public $passport;
    public $payment_receipt;

    public function mount($id)
    {
        $this->hotel = Hotel::findOrFail($id);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nid' => 'required|mimes:jpg',
            'passport' => 'nullable|mimes:jpg',
            'payment_receipt' => 'nullable|mimes:jpg'
        ]);

        $order = new HotelOrder();
        $order->user_id = auth()->id();
        $order->hotel_id = $this->hotel->id;
        $order->name = $this->name;
        $order->address = $this->address;
        $order->phone = $this->phone;
        $order->nid = $this->nid->store('uploads/nid','public');
        $order->passport = $this->passport?->store('uploads/passport','public');
        $order->payment_receipt = $this->payment_receipt?->store('uploads/payment_receipt','public');
        $price = auth()->user()->role == 'agent' ? $this->hotel->b2b_price : $this->hotel->price;
        if(auth()->user()->balance >= $price){
            auth()->user()->decrement('balance',$price);
            $order->payment_status = 'paid';
        }else{
            $order->payment_status = 'unpaid';
        }
        $order->price = $price;
        $order->save();

        return to_route('hotel.details',$this->hotel->id)
                ->with('success','Order placed successfully!');
    }

    #[Title('Apply Now')]
    public function render()
    {
        return view('frontend.hotel.order');
    }
}
