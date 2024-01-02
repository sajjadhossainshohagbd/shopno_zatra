<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $page = Page::find($id);
       $page->delete();

       return to_route('page.index')->with('success','Page deleted successfully!');
    }

    #[Title('Pages')]
    public function render()
    {
        return view('backend.page.index',[
            'pages' => Page::latest()->paginate()
        ]);
    }
}
