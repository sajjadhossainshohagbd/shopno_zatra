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
    public $b2b_price;
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
            'b2b_price' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png'
        ]);

        $edu = new EducationVisa();
        $edu->name = $this->name;
        $edu->country = $this->country;
        $edu->program = $this->program;
        $edu->description = $this->description;
        $edu->terms_condition = $this->terms_condition;
        $edu->thumbnail = $this->thumbnail->store('uploads/packages/education/thumbnail', 'public');
        $edu->price = $this->price;
        $edu->b2b_price = $this->b2b_price;
        $edu->save();

        return to_route('education.visa.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.education-visa.add');
    }
}
