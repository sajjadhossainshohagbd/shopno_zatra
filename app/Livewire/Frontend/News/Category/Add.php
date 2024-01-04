<?php

namespace App\Livewire\Frontend\News\Category;

use Livewire\Component;
use Livewire\Attributes\Title;

class Add extends Component
{
    #[Title('Title')]
    public function render()
    {
        return view('frontend.news.category.add');
    }
}
