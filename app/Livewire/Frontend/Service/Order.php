<?php

namespace App\Livewire\Frontend\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\BalanceCostHistory;
use App\Models\ServiceOrder;
use Illuminate\Support\Facades\Auth;

#[Layout('frontend.layouts.app')]
class Order extends Component
{
    use WithFileUploads;

    #[Locked]
    public $order;

    public $name;
    public $phone;
    public $address;
    public $guardian_name;
    public $guardian_phone;
    public $nid;
    public $passport;
    public $payment_receipt;

    #[Locked]
    public $service;

    public bool $terms_condition;

    public function mount($id)
    {
        if(auth()->check() && auth()->user()->role == 'agent'){
            $this->redirect(route('home'));
        }
        $this->service = Service::findOrFail($id);
    }

    public function submit()
    {
        if(!auth()->check()) {
            return to_route('login');
        }
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'guardian_name' => 'required',
            'guardian_phone' => 'required',
            'nid' => 'required|mimes:jpg',
            'passport' => 'required|mimes:jpg',
            'payment_receipt' => 'nullable|mimes:jpg,jpeg'
        ]);

        $order = new ServiceOrder();
        $order->user_id = auth()->id();
        $order->service_id = $this->service->id;
        $order->name = $this->name;
        $order->address = $this->address;
        $order->phone = $this->phone;
        $order->guardian_name = $this->guardian_name;
        $order->guardian_phone = $this->guardian_phone;
        $order->nid = $this->nid->store('uploads/nid','public');
        $order->passport = $this->passport->store('uploads/passport','public');
        $order->payment_receipt = $this->payment_receipt?->store('uploads/payment_receipt','public');

        $price = $this->service->price;
        if(auth()->user()->balance >= $price){
            auth()->user()->decrement('balance',$price);
            $order->payment_status = 'paid';
        }else{
            $order->payment_status = 'unpaid';
        }
        $order->price = $price;
        $order->save();

        return to_route('services.details', $this->service->id)->with('success', 'Service purchased successfully!');
    }

    #[Title('Service Order')]
    public function render()
    {
        return view('frontend.service.order');
    }
}
