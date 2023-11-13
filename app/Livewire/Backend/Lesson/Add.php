<?php

namespace App\Livewire\Backend\Lesson;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Add extends Component
{
    #[Locked]
    public $courses;

    public $name,$course;

    public function mount()
    {
        $this->courses = Course::latest()->get();
    }

    public function addLesson()
    {
        $this->validate([
            'name' => 'required',
            'course' => 'required|exists:courses,id'
        ]);


        $lesson = new Lesson();
        $lesson->name = $this->name;
        $lesson->course_id = $this->course;
        $lesson->save();

        session()->flash('success','Lesson added successfully!');

        return $this->redirectRoute('lessons.index');
    }

    #[Title('Add Lesson')]
    public function render()
    {
        return view('backend.lesson.add');
    }
}
