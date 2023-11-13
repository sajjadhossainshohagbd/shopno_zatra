<?php

namespace App\Livewire\Frontend\Courses;

use App\Models\Course;
use App\Models\CourseCart;
use App\Models\CourseEnroll;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $course;

    public $isEnrolled = false;

    public function mount($slug)
    {
        $this->course = Course::withCount('lessons','enrolls')->publish()->whereSlug($slug)->firstOrFail();
        $this->isEnrolled = CourseEnroll::own()->where('course_id',$this->course->id)->first() ? true : false;
    }

    public function checkOut()
    {
        if(!auth()->check()){
            return to_route('login');
        }
        
        $this->addToCart();

        $this->redirect(route('courses.checkout'));
    }

    public function addToCart()
    {
        if(!auth()->check()){
            return to_route('login');
        }

        if(CourseCart::own()->where('course_id',$this->course->id)->first()){

            $this->dispatch('alert',[
                'type' => 'warning',
                'message' => 'Course already added to your cart.'
            ]);

            return;
        }

        $cart = new CourseCart();
        $cart->course_id = $this->course->id;
        $cart->user_id = auth()->id();
        $cart->price = $this->course->price;
        $cart->save();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Course added to your cart.'
        ]);

    }

    public function render()
    {
        return view('frontend.courses.details')->title($this->course->name);
    }
}
