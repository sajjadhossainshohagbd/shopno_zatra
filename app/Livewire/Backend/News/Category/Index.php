<?php

namespace App\Livewire\Backend\News\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Category deleted successfully!'
        ]);
    }

    #[Title('News Categories')]
    public function render()
    {
        return view('backend.news.category.index',[
            'categories' => Category::latest()->paginate()
        ]);
    }
}
