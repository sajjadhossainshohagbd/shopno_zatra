<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;
use App\Models\HajjService;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Add extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $terms_condition;
    public $thumbnail;
    public $type;
    public $price;

    public function mount($type)
    {
        $this->type = $type;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'thumbnail' => 'required|mimes:jpg',
            'price' => 'required'
        ]);

        $hajj = new Service();
        $hajj->name = $this->name;
        $hajj->type = $this->type;
        $hajj->description = $this->description;
        $hajj->terms_condition = $this->terms_condition;
        $hajj->thumbnail = $this->thumbnail->store('uploads/packages/hajj/services/thumbnail','public');
        $hajj->price = $this->price;
        $hajj->save();

        return to_route('services.index',$this->type)->with('success','Service added successfully!');
    }

    #[Title('Add Service')]
    public function render()
    {
        return view('backend.service.add');
    }
}
