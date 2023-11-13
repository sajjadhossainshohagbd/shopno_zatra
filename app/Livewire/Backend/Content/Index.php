<?php

namespace App\Livewire\Backend\Content;

use Livewire\Component;
use App\Models\CourseContent;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Index extends Component
{
    public function delete($id)
    {
        CourseContent::destroy($id);

        session()->flash('success','Content deleted successfully!');
    }

    #[Title('Content')]
    public function render()
    {
        return view('backend.content.index',[
            'contents' => CourseContent::with('course','lesson')->latest()->paginate()
        ]);
    }
}
