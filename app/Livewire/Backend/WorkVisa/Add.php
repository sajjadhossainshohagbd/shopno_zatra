<?php

namespace App\Livewire\Backend\WorkVisa;

use App\Models\WorkVisa;
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
    public $category;
    public $terms_condition;
    public $process_days;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'terms_condition' => 'required',
            'price' => 'required',
            'b2b_price' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png',
            'process_days' => 'required'
        ]);

        $work = new WorkVisa();
        $work->name = $this->name;
        $work->country = $this->country;
        $work->process_days = $this->process_days;
        $work->category = $this->category;
        $work->description = $this->description;
        $work->terms_condition = $this->terms_condition;
        $work->thumbnail = $this->thumbnail->store('uploads/packages/work/thumbnail', 'public');
        $work->price = $this->price;
        $work->b2b_price = $this->b2b_price;
        $work->save();

        return to_route('work.visa.index')->with('success', 'Package added successfully!');
    }

    #[Title('Add Package')]
    public function render()
    {
        return view('backend.work-visa.add');
    }
}
