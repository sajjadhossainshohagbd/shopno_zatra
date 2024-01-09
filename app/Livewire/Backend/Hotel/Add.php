<?php

namespace App\Livewire\Backend\Hotel;

use App\Models\Hotel;
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
    public $terms_condition;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png'
        ]);

        $edu = new Hotel();
        $edu->name = $this->name;
        $edu->description = $this->description;
        $edu->terms_condition = $this->terms_condition;
        $edu->thumbnail = $this->thumbnail->store('uploads/packages/hotel/thumbnail', 'public');
        $edu->price = $this->price;
        $edu->b2b_price = $this->b2b_price;
        $edu->save();

        return to_route('hotel.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.hotel.add');
    }
}
