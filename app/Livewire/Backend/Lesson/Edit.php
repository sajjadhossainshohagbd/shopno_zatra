<?php

namespace App\Livewire\Backend\Lesson;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    #[Locked]
    public $courses,$lesson;

    public $name,$course;

    public function mount($id)
    {
        $this->lesson = Lesson::findOrFail($id);

        $this->name = $this->lesson->name;
        $this->course = $this->lesson->course_id;

        $this->courses = Course::latest()->get();
    }

    public function addLesson()
    {
        $this->validate([
            'name' => 'required',
            'course' => 'required|exists:courses,id'
        ]);

        $lesson = $this->lesson;
        $lesson->name = $this->name;
        $lesson->course_id = $this->course;
        $lesson->save();

        session()->flash('success','Lesson updated successfully!');

        return $this->redirectRoute('lessons.index');
    }

    #[Title('Edit Lesson')]
    public function render()
    {
        return view('backend.lesson.edit');
    }
}
