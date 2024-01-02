<?php

namespace App\Livewire\Backend\News\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    public $name;
    public $slug;

    #[Locked]
    public $category;

    public function mount($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
        $this->slug = $this->category->slug;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$this->category->id,
        ]);

        $category = $this->category;
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();

        session()->flash('success','Category updated successfully!');

        return $this->redirectRoute('news.category.index');
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    #[Title('Update Category')]
    public function render()
    {
        return view('backend.news.category.edit');
    }
}
