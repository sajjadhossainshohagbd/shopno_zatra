<?php

namespace App\Livewire\Frontend\User;

use App\Models\CourseEnroll;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class PurchaseCourse extends Component
{
    public $courses;

    public function mount()
    {
        $this->courses = CourseEnroll::with('course','course.lessons')->has('course')->own()->latest()->get();
    }

    #[Title('My Courses')]
    public function render()
    {
        return view('frontend.user.purchase-course');
    }
}
