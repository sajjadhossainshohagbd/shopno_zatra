<?php

namespace App\Livewire\Backend\Courses;

use App\Models\Course;
use App\Models\CourseContent;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $course = Course::find($id);
        @unlink(public_path($course->thumbnail));
        $course->lessons->each->delete();
        CourseContent::where('course_id',$id)->delete();
        $course->delete();

        session()->flash('success','Course deleted successfully!');
    }

    #[Title('Courses')]
    public function render()
    {
        return view('backend.courses.index',[
            'courses' => Course::with('category')->latest()->paginate()
        ]);
    }
}
