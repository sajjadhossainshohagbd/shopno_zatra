<?php

namespace App\Livewire\Frontend\Courses;

use App\Models\Course;
use Livewire\Component;
use App\Models\CourseCategory;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Index extends Component
{
    #[Locked]
    public $courses,$categories;

    public function mount()
    {
        $this->courses = Course::withCount('lessons')->publish()->latest()->get();
        $this->categories = CourseCategory::get();
    }

    #[Title('Courses')]
    public function render()
    {
        return view('frontend.courses.index');
    }
}
