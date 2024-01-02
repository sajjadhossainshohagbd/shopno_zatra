<?php

namespace App\Livewire\Backend\News\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;

class Add extends Component
{
    public $name;
    public $slug;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();

        session()->flash('success','Category added successfully!');

        return $this->redirectRoute('news.category.index');
    }
    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    #[Title('Add Category')]
    public function render()
    {
        return view('backend.news.category.add');
    }
}
