<?php

namespace App\Livewire\Frontend\News;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::whereSlug($slug)->firstOrFail();
    }

    public function render()
    {
        return view('frontend.news.details')->title($this->post->title);
    }
}
