<?php

namespace App\Livewire\Backend\Hotel;

use App\Models\Hotel;
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
    public $terms_condition;

    public $hotel;

    public function mount($id)
    {
        $this->hotel = Hotel::findOrFail($id);
        $this->name = $this->hotel->name;
        $this->description = $this->hotel->description;
        $this->price = $this->hotel->price;
        $this->b2b_price = $this->hotel->b2b_price;
        $this->terms_condition = $this->hotel->terms_condition;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $hotel = $this->hotel;
        $hotel->name = $this->name;
        $hotel->terms_condition = $this->terms_condition;
        $hotel->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($hotel->thumbnail));
            $hotel->thumbnail = $this->thumbnail->store('uploads/packages/hotel/thumbnail', 'public');
        }
        $hotel->price = $this->price;
        $hotel->b2b_price = $this->b2b_price;
        $hotel->save();

        return to_route('hotel.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.hotel.edit');
    }
}
