<?php

namespace App\Livewire\Backend\Hajj;

use App\Models\Hajj;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\HajjForm;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public HajjForm $form;

    public function save()
    {
        $this->form->validate();

        $hajj = new Hajj();
        $hajj->package_name = $this->form->package_name;
        $hajj->description = $this->form->description;
        $hajj->terms_condition = $this->form->terms_condition;
        $hajj->type = $this->form->type;
        $hajj->b2b_price = $this->form->b2b_price;
        $hajj->thumbnail = $this->form->thumbnail->store('uploads/packages/hajj/thumbnail', 'public');
        $hajj->start_from = $this->form->start_from;
        $hajj->save();

        return to_route('hajj.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Hajj Package')]
    public function render()
    {
        return view('backend.hajj.add');
    }
}
