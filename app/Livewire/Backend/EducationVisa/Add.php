<?php

namespace App\Livewire\Backend\EducationVisa;

use App\Models\EducationVisa;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Add extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $thumbnail;
    public $price;
    public $country;
    public $program;
    public $terms_condition;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'program' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png'
        ]);

        $work = new EducationVisa();
        $work->name = $this->name;
        $work->country = $this->country;
        $work->program = $this->program;
        $work->description = $this->description;
        $work->terms_condition = $this->terms_condition;
        $work->thumbnail = $this->thumbnail->store('uploads/packages/education/thumbnail', 'public');
        $work->price = $this->price;
        $work->save();

        return to_route('education.visa.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.education-visa.add');
    }
}
