<?php

namespace App\Livewire\Backend\Hajj;

use App\Models\Hajj;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Livewire\Forms\HajjForm;

class Edit extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $package_name;

    #[Rule('required')]
    public $terms_condition;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $type;

    #[Rule('nullable|mimes:jpg,png,jpeg')]
    public $thumbnail;

    #[Rule('required')]
    public $start_from;

    #[Locked]
    public $hajj;

    public function mount($id)
    {
        $hajj = Hajj::findOrFail($id);
        $this->hajj = $hajj;
        $this->package_name = $hajj->package_name;
        $this->description = $hajj->description;
        $this->terms_condition = $hajj->terms_condition;
        $this->type = $hajj->type;
        $this->start_from = $hajj->start_from;
    }

    public function save()
    {
        $this->validate();

        $hajj = $this->hajj;
        $hajj->package_name = $this->package_name;
        $hajj->description = $this->description;
        $hajj->terms_condition = $this->terms_condition;
        $hajj->type = $this->type;
        if($this->thumbnail) {
            @unlink(public_path($hajj->thumbnail));
            $hajj->thumbnail = $this->thumbnail->store('uploads/packages/hajj/thumbnail', 'public');
        }
        $hajj->start_from = $this->start_from;
        $hajj->save();

        return to_route('hajj.index')->with('success', 'Package updated successfully!');
    }

    #[Title('Edit Hajj')]
    public function render()
    {
        return view('backend.hajj.edit');
    }
}
