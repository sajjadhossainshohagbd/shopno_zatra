<?php

namespace App\Livewire\Backend\Lesson;

use App\Models\Lesson;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Index extends Component
{
    public function delete($id)
    {
        Lesson::destroy($id);

        session()->flash('success','Lesson deleted successfully!');
    }

    #[Title('Lessons')]
    public function render()
    {
        return view('backend.lesson.index',[
            'lessons' => Lesson::with('course')->latest()->paginate()
        ]);
    }
}
