<?php

namespace App\Livewire\Backend\Holiday;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $visa = Holiday::find($id);
       @unlink(public_path($visa->thumbnail));
       $visa->delete();
    }

    #[Title('Holiday Package')]
    public function render()
    {
        return view('backend.holiday.index',[
            'packages' => Holiday::latest()->paginate()
        ]);
    }
}
