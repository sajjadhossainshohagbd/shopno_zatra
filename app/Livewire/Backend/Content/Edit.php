<?php

namespace App\Livewire\Backend\Content;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;
use App\Models\CourseContent;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    #[Locked]
    public $courses,$content,$lessons = [];

    public $course_id,$lesson_id,$title,$link,$duration;

    public function mount($id)
    {
        $this->courses = Course::latest()->get();
        $this->content = CourseContent::findOrFail($id);
        $this->course_id = $this->content->course_id;
        $this->lesson_id = $this->content->lesson_id;
        $this->title = $this->content->title;
        $this->duration = $this->content->duration;
        $this->link = $this->content->video_link;
        $this->updatedCourseId();
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

        $content = $this->content;
        $content->course_id = $this->course_id;
        $content->lesson_id = $this->lesson_id;
        $content->title = $this->title;
        $content->video_link = $this->link;
        $content->duration = $this->duration;
        $content->save();

        session()->flash('success','Content updated successfully!');

        $this->redirectRoute('contents.index');
    }

    #[Title('Edit Content')]
    public function render()
    {
        return view('backend.content.edit');
    }
}
