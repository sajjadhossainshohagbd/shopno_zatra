<?php

namespace App\Livewire\Backend\Tourist;

use App\Models\Tourist;
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
    public $terms_condition;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png'
        ]);

        $tourist = new Tourist();
        $tourist->name = $this->name;
        $tourist->country = $this->country;
        $tourist->description = $this->description;
        $tourist->terms_condition = $this->terms_condition;
        $tourist->thumbnail = $this->thumbnail->store('uploads/packages/tourist/thumbnail', 'public');
        $tourist->price = $this->price;
        $tourist->b2b_price = $this->b2b_price;
        $tourist->save();

        return to_route('tourist.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.tourist.add');
    }
}
