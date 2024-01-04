<?php

namespace App\Livewire\Frontend\News\Post;

use Livewire\Component;
use Livewire\Attributes\Title;

class Edit extends Component
{
    #[Title('Title')]
    public function render()
    {
        return view('frontend.news.post.edit');
    }
}
