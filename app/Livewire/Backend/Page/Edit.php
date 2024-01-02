<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Edit extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;

    public $page;

    public function mount($id)
    {
        $this->page = Page::findOrFail($id);
        $this->title = $this->page->title;
        $this->slug = $this->page->slug;
        $this->description = $this->page->description;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,'.$this->page->id,
            'description' => 'required',
        ]);

        $page = $this->page;
        $page->title = $this->title;
        $page->slug = $this->slug;
        $page->description = $this->description;
        $page->save();

        return to_route('page.index')->with('success', 'Page updated successfully!');
    }


    #[Title('Update Page')]
    public function render()
    {
        return view('backend.page.edit');
    }
}
