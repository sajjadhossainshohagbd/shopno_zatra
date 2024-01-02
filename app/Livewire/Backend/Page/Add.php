<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Add extends Component
{
    public $title;
    public $slug;
    public $description;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'description' => 'required',
        ]);

        $page = new Page();
        $page->title = $this->title;
        $page->slug = $this->slug;
        $page->description = $this->description;
        $page->save();

        return to_route('page.index')->with('success', 'Page added successfully!');
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    #[Title('Add Page')]
    public function render()
    {
        return view('backend.page.add');
    }
}
