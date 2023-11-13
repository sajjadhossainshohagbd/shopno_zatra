<?php

namespace App\Livewire\Frontend\EducationVisa;

use Livewire\Component;
use App\Models\EducationVisa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class Details extends Component
{
    #[Locked]
    public $education;

    public bool $terms_condition;

    public function mount($id)
    {
        $this->education = EducationVisa::findOrFail($id);
    }


    public function applyNow()
    {
        $this->validate([
            'terms_condition' => 'required'
        ]);

        if(!auth()->check()){
            return to_route('login');
        }

        return to_route('education.order',$this->education->id);
    }

    #[Title('Apply Now')]
    public function render()
    {
        return view('frontend.education-visa.details');
    }
}
