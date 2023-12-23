<?php

namespace App\Livewire\Backend\EducationVisa;

use App\Models\EducationVisa;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

class Edit extends Component
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

    public $education;

    public function mount($id)
    {
        $this->education = EducationVisa::findOrFail($id);
        $this->name = $this->education->name;
        $this->description = $this->education->description;
        $this->program = $this->education->program;
        $this->country = $this->education->country;
        $this->price = $this->education->price;
        $this->b2b_price = $this->education->b2b_price;
        $this->terms_condition = $this->education->terms_condition;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'program' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $edu = $this->education;
        $edu->name = $this->name;
        $edu->country = $this->country;
        $edu->terms_condition = $this->terms_condition;
        $edu->program = $this->program;
        $edu->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($edu->thumbnail));
            $edu->thumbnail = $this->thumbnail->store('uploads/packages/education/thumbnail', 'public');
        }
        $edu->price = $this->price;
        $edu->b2b_price = $this->b2b_price;
        $edu->save();

        return to_route('education.visa.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.education-visa.edit');
    }
}
