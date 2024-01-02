<?php

namespace App\Livewire\Backend\Tourist;

use App\Models\Tourist;
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
    public $b2b_price;
    public $country;
    public $program;
    public $terms_condition;

    public $tourist;

    public function mount($id)
    {
        $this->tourist = Tourist::findOrFail($id);
        $this->name = $this->tourist->name;
        $this->description = $this->tourist->description;
        $this->country = $this->tourist->country;
        $this->price = $this->tourist->price;
        $this->b2b_price = $this->tourist->b2b_price;
        $this->terms_condition = $this->tourist->terms_condition;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $edu = $this->tourist;
        $edu->name = $this->name;
        $edu->country = $this->country;
        $edu->terms_condition = $this->terms_condition;
        $edu->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($edu->thumbnail));
            $edu->thumbnail = $this->thumbnail->store('uploads/packages/tourist/thumbnail', 'public');
        }
        $edu->price = $this->price;
        $edu->b2b_price = $this->b2b_price;
        $edu->save();

        return to_route('tourist.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.tourist.edit');
    }
}
