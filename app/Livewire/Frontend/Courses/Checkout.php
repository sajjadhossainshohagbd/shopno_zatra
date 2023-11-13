<?php

namespace App\Livewire\Frontend\Courses;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use App\Models\CourseCart;
use App\Models\CourseEnroll;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Layout('frontend.layouts.app')]
class Checkout extends Component
{
    use WithFileUploads;

    #[Locked]
    public $carts;

    public $name,$phone,$address_one,$address_two,$country,$state,$postal_code,$payment_method,$payment_proof;

    public function mount()
    {
        $this->carts = CourseCart::own()->get();

        if($this->carts->count() < 1){
            return to_route('courses.cart')->with('error','Your cart is empty!');
        }
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address_one' => 'required',
            'country' => 'required',
            'state' => 'required',
            'payment_proof' => 'required|mimes:jpg,png,jpeg'
        ]);


        foreach($this->carts as $cart){

            $payment_proof = $this->payment_proof->store('uploads/courses/payment_proof','public');

            $enroll = new CourseEnroll();
            $enroll->user_id = $cart->user_id;
            $enroll->course_id = $cart->course_id;
            $enroll->name = $this->name;
            $enroll->phone = $this->phone;
            $enroll->address_one = $this->address_one;
            $enroll->address_two = $this->address_two;
            $enroll->country = $this->country;
            $enroll->state = $this->state;
            $enroll->postal_code = $this->postal_code;
            $enroll->payment_method = 'bank_transfer';
            $enroll->price = $cart->price;
            $enroll->payment_proof = $payment_proof;
            $enroll->save();

            $cart->delete();
        }
        session()->flash('success','Congratulations, Course enrolled successfully!');
        $this->redirect(route('courses.cart'));
    }

    #[Title('Checkout')]
    public function render()
    {
        return view('frontend.courses.checkout');
    }
}
