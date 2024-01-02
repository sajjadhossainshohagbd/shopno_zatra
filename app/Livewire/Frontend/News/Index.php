<?php

namespace App\Livewire\Frontend\News;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Index extends Component
{
    #[Title('News Media')]
    public function render()
    {
        return view('frontend.news.index',[
            'posts' => Post::latest()->paginate()
        ]);
    }
}
