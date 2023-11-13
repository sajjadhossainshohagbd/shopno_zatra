<?php

namespace App\Livewire\Frontend\Courses;

use App\Models\CourseCart;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Cart extends Component
{
    #[Locked]
    public $carts;

    public function mount()
    {
        $this->getCarts();
    }
    #[Computed]
    public function getCarts()
    {
        $this->carts = CourseCart::own()->get();
    }

    public function remove($id)
    {
        CourseCart::whereId($id)->delete();

        $this->getCarts();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Course removed from your cart.'
        ]);
    }

    #[Title('Cart')]
    public function render()
    {
        return view('frontend.courses.cart');
    }
}
