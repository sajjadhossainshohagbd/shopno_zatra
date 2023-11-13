<?php

namespace App\Livewire\Backend;

use App\Models\CourseEnroll as ModelsCourseEnroll;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class CourseEnroll extends Component
{
    use WithPagination;

    #[Title('Course Enrolls')]
    public function render()
    {
        return view('backend.course-enroll',[
            'enrolls' => ModelsCourseEnroll::latest()->paginate()
        ]);
    }
}
