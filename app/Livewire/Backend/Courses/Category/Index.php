<?php

namespace App\Livewire\Backend\Courses\Category;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CourseCategory;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $category = CourseCategory::find($id);
        @unlink(public_path($category->icon));
        $category->delete();

        session()->flash('success','Category deleted successfully!');

    }

    #[Title('Course Category')]
    public function render()
    {
        return view('backend.courses.category.index',[
            'categories' => CourseCategory::latest()->paginate()
        ]);
    }
}
