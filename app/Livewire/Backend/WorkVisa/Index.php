<?php

namespace App\Livewire\Backend\WorkVisa;

use Livewire\Component;
use App\Models\WorkVisa;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $work = WorkVisa::find($id);
       @unlink(public_path($work->thumbnail));
       $work->delete();

    }

    #[Title('Work Visa')]
    public function render()
    {
        return view('backend.work-visa.index',[
            'works' => WorkVisa::latest()->paginate()
        ]);
    }
}
