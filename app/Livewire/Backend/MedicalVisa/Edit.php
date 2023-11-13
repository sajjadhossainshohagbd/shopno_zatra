<?php

namespace App\Livewire\Backend\MedicalVisa;

use Livewire\Component;
use App\Models\MedicalVisa;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $thumbnail;
    public $price;
    public $country;
    public $program;
    public $terms_condition;

    public $medical;

    public function mount($id)
    {
        $this->medical = MedicalVisa::findOrFail($id);
        $this->name = $this->medical->name;
        $this->description = $this->medical->description;
        $this->program = $this->medical->program;
        $this->country = $this->medical->country;
        $this->price = $this->medical->price;
        $this->terms_condition = $this->medical->terms_condition;
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
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $edu = $this->medical;
        $edu->name = $this->name;
        $edu->country = $this->country;
        $edu->terms_condition = $this->terms_condition;
        $edu->program = $this->program;
        $edu->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($edu->thumbnail));
            $edu->thumbnail = $this->thumbnail->store('uploads/packages/medical/thumbnail', 'public');
        }
        $edu->price = $this->price;
        $edu->save();

        return to_route('medical.visa.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.medical-visa.edit');
    }
}
