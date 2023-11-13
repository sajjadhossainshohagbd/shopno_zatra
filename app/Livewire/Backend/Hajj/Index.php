<?php

namespace App\Livewire\Backend\Hajj;

use App\Models\Hajj;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $hajj = Hajj::find($id);
       @unlink(public_path($hajj->thumbnail));
       $hajj->delete();

    }

    #[Title('Hajj Packages')]
    public function render()
    {
        return view('backend.hajj.index',[
            'packages' => Hajj::latest()->paginate()
        ]);
    }
}
