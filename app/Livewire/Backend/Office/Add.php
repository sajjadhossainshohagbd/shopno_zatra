<?php

namespace App\Livewire\Backend\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\Attributes\Title;

class Add extends Component
{
    public $title;
    public $address;
    public $type;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'address' => 'required',
            'type' => 'required'
        ]);

        $office = new Office();
        $office->title = $this->title;
        $office->address = $this->address;
        $office->type = $this->type;
        $office->save();

        return to_route('office.index')->with('success', 'Office added successfully!');
    }

    #[Title('Add Office')]
    public function render()
    {
        return view('backend.office.add');
    }
}
