<?php

namespace App\Livewire\Backend\MedicalVisa;

use Livewire\Component;
use App\Models\MedicalVisa;
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

        $medical = new MedicalVisa();
        $medical->name = $this->name;
        $medical->country = $this->country;
        $medical->program = $this->program;
        $medical->description = $this->description;
        $medical->terms_condition = $this->terms_condition;
        $medical->thumbnail = $this->thumbnail->store('uploads/packages/medical/thumbnail', 'public');
        $medical->price = $this->price;
        $medical->b2b_price = $this->b2b_price;
        $medical->save();

        return to_route('medical.visa.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.medical-visa.add');
    }
}
