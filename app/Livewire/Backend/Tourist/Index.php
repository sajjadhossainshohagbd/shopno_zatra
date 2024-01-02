<?php

namespace App\Livewire\Backend\Tourist;

use App\Models\Holiday;
use App\Models\Tourist;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $visa = Tourist::find($id);
       @unlink(public_path($visa->thumbnail));
       $visa->delete();
    }

    #[Title('Tourist List')]
    public function render()
    {
        return view('backend.tourist.index',[
            'packages' => Tourist::latest()->paginate()
        ]);
    }
}
