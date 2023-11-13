<?php

namespace App\Livewire\Backend\Courses\Category;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CourseCategory;
use Livewire\Attributes\Title;

class Add extends Component
{
    use WithFileUploads;

    public $name;
    public $icon;

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'required|mimes:jpg,png,jpeg',
        ]);

        $icon = $this->icon->store('uploads/courses/category_icon','public');

        $category = new CourseCategory();
        $category->name = $this->name;
        $category->icon = $icon;
        $category->save();

        session()->flash('success','Category added successfully!');

        return $this->redirectRoute('categories.index');
    }

    #[Title('Add Category')]
    public function render()
    {
        return view('backend.courses.category.add');
    }
}
