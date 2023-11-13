<?php

namespace App\Livewire\Backend\WorkVisa;

use Livewire\Component;
use App\Models\WorkVisa;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $thumbnail;
    public $price;
    public $country;
    public $category;
    public $terms_condition;
    public $process_days;
    public $work;

    public function mount($id)
    {
        $this->work = WorkVisa::findOrFail($id);
        $this->name = $this->work->name;
        $this->description = $this->work->description;
        $this->category = $this->work->category;
        $this->country = $this->work->country;
        $this->process_days = $this->work->process_days;
        $this->price = $this->work->price;
        $this->terms_condition = $this->work->terms_condition;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png',
            'process_days' => 'required'
        ]);

        $work = $this->work;
        $work->name = $this->name;
        $work->country = $this->country;
        $work->process_days = $this->process_days;
        $work->category = $this->category;
        $work->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($work->thumbnail));
            $work->thumbnail = $this->thumbnail->store('uploads/packages/work/thumbnail', 'public');
        }
        $work->price = $this->price;
        $work->save();

        return to_route('work.visa.index')->with('success', 'Package updated successfully!');
    }

    #[Title('Edit Package')]
    public function render()
    {
        return view('backend.work-visa.edit');
    }
}
