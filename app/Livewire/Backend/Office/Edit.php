<?php

namespace App\Livewire\Backend\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\Attributes\Title;

class Edit extends Component
{
    public $title;
    public $address;
    public $type;

    public $office;

    public function mount($id)
    {
        $this->office = Office::findOrFail($id);
        $this->title = $this->office->title;
        $this->address = $this->office->address;
        $this->type = $this->office->type;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'address' => 'required',
            'type' => 'required'
        ]);

        $office = $this->office;
        $office->title = $this->title;
        $office->address = $this->address;
        $office->type = $this->type;
        $office->save();

        return to_route('office.index')->with('success', 'Office added successfully!');
    }

    #[Title('Update Office')]
    public function render()
    {
        return view('backend.office.edit');
    }
}
