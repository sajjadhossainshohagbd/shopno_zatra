<?php

namespace App\Livewire\Frontend\User;

use App\Models\Course;
use App\Models\CourseContent;
use App\Models\CourseEnroll;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class CourseLearn extends Component
{
    #[Locked]
    public $course,$preview_content;

    public function mount($id,$content_id = null)
    {
        $enroll = CourseEnroll::own()->where('course_id',decrypt($id))->first();

        if($enroll == null){
            abort(404);
        }

        $this->course = Course::findOrFail(decrypt($id));

        $this->preview_content = CourseContent::where('course_id',$this->course->id)->where('id',$content_id)->first();

    }

    public function render()
    {
        return view('frontend.user.course-learn')->title($this->preview_content->title ?? $this->course->name);
    }
}
