<?php

namespace App\Livewire\Backend\Content;

use App\Models\Course;
use App\Models\CourseContent;
use App\Models\Lesson;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Add extends Component
{
    #[Locked]
    public $courses,$lessons = [];

    public $course_id,$lesson_id,$title,$link,$duration;

    public function mount()
    {
        $this->courses = Course::latest()->get();

    }

    public function updatedCourseId()
    {
        $this->lessons = Lesson::whereCourseId($this->course_id)->get();
    }

    public function addContent()
    {
        $this->validate([
            'course_id' => 'required',
            'lesson_id' => 'required',
            'title' => 'required',
            'link' => 'required',
            'duration' => 'required'
        ]);

        $content = new CourseContent();
        $content->course_id = $this->course_id;
        $content->lesson_id = $this->lesson_id;
        $content->title = $this->title;
        $content->duration = $this->duration;
        $content->video_link = $this->link;
        $content->save();

        session()->flash('success','Content added successfully!');

        $this->redirectRoute('contents.index');
    }

    #[Title('Add Content')]
    public function render()
    {
        return view('backend.content.add');
    }
}
