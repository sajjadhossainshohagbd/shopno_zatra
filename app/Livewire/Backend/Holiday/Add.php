<?php

namespace App\Livewire\Backend\Holiday;

use App\Models\Holiday;
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

        $holiday = new Holiday();
        $holiday->name = $this->name;
        $holiday->country = $this->country;
        $holiday->program = $this->program;
        $holiday->description = $this->description;
        $holiday->terms_condition = $this->terms_condition;
        $holiday->thumbnail = $this->thumbnail->store('uploads/packages/holiday/thumbnail', 'public');
        $holiday->price = $this->price;
        $holiday->b2b_price = $this->b2b_price;
        $holiday->save();

        return to_route('holiday.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.holiday.add');
    }
}
