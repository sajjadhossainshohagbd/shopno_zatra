<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;
use App\Models\HajjService;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $terms_condition;
    public $thumbnail;
    public $price;

    #[Locked]
    public $service;

    public function mount($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->terms_condition = $this->service->terms_condition;
        $this->price = $this->service->price;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'thumbnail' => 'nullable|mimes:jpg',
            'price' => 'required'
        ]);

       $hajj = $this->service;
       $hajj->name = $this->name;
       $hajj->description = $this->description;
       $hajj->terms_condition = $this->terms_condition;
       if($this->thumbnail){
            @unlink(public_path($hajj->thumbnail));
            $hajj->thumbnail = $this->thumbnail->store('uploads/packages/hajj/services/thumbnail','public');
       }
       $hajj->price = $this->price;
       $hajj->save();

       return to_route('services.index',$hajj->type)->with('success','Service updated successfully!');
    }

    #[Title('Edit Service')]
    public function render()
    {
        return view('backend.service.edit');
    }
}
