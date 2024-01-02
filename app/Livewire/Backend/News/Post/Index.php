<?php

namespace App\Livewire\Backend\News\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        @unlink(public_path($post->thumbnail));
        $post->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Post deleted successfully!'
        ]);
    }

    #[Title('Posts')]
    public function render()
    {
        return view('backend.news.post.index',[
            'posts' => Post::with('category')->latest()->paginate()
        ]);
    }
}
