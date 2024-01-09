<?php

namespace App\Livewire\Backend\Hotel;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $hotel = Hotel::find($id);
       @unlink(public_path($hotel->thumbnail));
       $hotel->delete();

       $this->dispatch('alert',[
        'type' => 'success',
        'message' => 'Package has been deleted!'
    ]);
    }

    #[Title('Hotel')]
    public function render()
    {
        return view('backend.hotel.index',[
            'hotels' => Hotel::latest()->paginate()
        ]);
    }
}
