<?php

namespace App\Livewire\Backend\EducationVisa;

use App\Models\EducationVisa;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
       $visa = EducationVisa::find($id);
       @unlink(public_path($visa->thumbnail));
       $visa->delete();

    }

    #[Title('Education Visa')]
    public function render()
    {
        return view('backend.education-visa.index',[
            'educations' => EducationVisa::latest()->paginate()
        ]);
    }
}
