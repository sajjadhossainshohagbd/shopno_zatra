<?php

namespace App\Livewire\Backend\Courses\Category;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CourseCategory;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $icon;

    #[Locked]
    public $course;

    public function mount($id)
    {
        $this->course = CourseCategory::findOrFail($id);
        $this->name = $this->course->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'nullable|mimes:jpg,png,jpeg',
        ]);

        $category = $this->course;
        $category->name = $this->name;
        if($this->icon){
            $category->icon = $this->icon->store('uploads/courses/category_icon','public');
        }
        $category->save();

        session()->flash('success','Category updated successfully!');

        return $this->redirectRoute('categories.index');
    }

    #[Title('Edit Category')]
    public function render()
    {
        return view('backend.courses.category.edit');
    }
}
