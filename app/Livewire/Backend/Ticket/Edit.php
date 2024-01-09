<?php

namespace App\Livewire\Backend\Ticket;

use App\Models\Ticket;
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

    public $ticket;

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);
        $this->name = $this->ticket->name;
        $this->description = $this->ticket->description;
        $this->price = $this->ticket->price;
        $this->b2b_price = $this->ticket->b2b_price;
        $this->terms_condition = $this->ticket->terms_condition;
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

        $ticket = $this->ticket;
        $ticket->name = $this->name;
        $ticket->terms_condition = $this->terms_condition;
        $ticket->description = $this->description;
        if($this->thumbnail) {
            @unlink(public_path($ticket->thumbnail));
            $ticket->thumbnail = $this->thumbnail->store('uploads/packages/ticket/thumbnail', 'public');
        }
        $ticket->price = $this->price;
        $ticket->b2b_price = $this->b2b_price;
        $ticket->save();

        return to_route('ticket.index')->with('success', 'Package updated successfully!');
    }


    #[Title('Update package')]
    public function render()
    {
        return view('backend.ticket.edit');
    }
}
