<?php

namespace App\Livewire\Backend\Holiday;

use App\Models\Holiday;
use Livewire\Component;
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

    public $holiday;

    public function mount($id)
    {
        $this->holiday = Holiday::findOrFail($id);
        $this->name = $this->holiday->name;
        $this->description = $this->holiday->description;
        $this->program = $this->holiday->program;
        $this->country = $this->holiday->country;
        $this->price = $this->holiday->price;
        $this->terms_condition = $this->holiday->terms_condition;
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

        $edu = $this->holiday;
        $edu->name = $this->name;
        $edu->country = $this->country;
        $edu->terms_condition = $this->terms_condition;
        $edu->program = $this->program;
        $edu->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($edu->thumbnail));
            $edu->thumbnail = $this->thumbnail->store('uploads/packages/holiday/thumbnail', 'public');
        }
        $edu->price = $this->price;
        $edu->save();

        return to_route('holiday.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.holiday.edit');
    }
}
