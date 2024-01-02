<?php

namespace App\Livewire\Backend\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $office = Office::find($id);
       $office->delete();

       return to_route('office.index')->with('success','Office deleted successfully!');
    }

    #[Title('Offices')]
    public function render()
    {
        return view('backend.office.index',[
            'offices' => Office::latest()->paginate()
        ]);
    }
}
