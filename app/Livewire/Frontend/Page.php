<?php

namespace App\Livewire\Frontend;

use App\Models\Page as PageModel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Page extends Component
{
    public $page;

    public function mount($slug)
    {
        $this->page = PageModel::whereSlug($slug)->firstOrFail();
    }

    public function render()
    {
        return view('frontend.page')->title($this->page->title);
    }
}
