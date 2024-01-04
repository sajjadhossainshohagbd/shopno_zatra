<?php

namespace App\Livewire\Frontend\News\Post;

use Livewire\Component;
use Livewire\Attributes\Title;

class Add extends Component
{
    #[Title('Title')]
    public function render()
    {
        return view('frontend.news.post.add');
    }
}
