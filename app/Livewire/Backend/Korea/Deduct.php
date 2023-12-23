<?php

namespace App\Livewire\Backend\Korea;

use App\Models\CourseBalanceHistory;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use Livewire\WithPagination;

class Deduct extends Component
{
    use WithPagination;
    
    #[Locked]
    public $user;

    public $amount;
    public $reason;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function submit()
    {
        $this->validate([
            'amount' => 'required',
            'reason' => 'required',
        ]);


        $history = new CourseBalanceHistory();
        $history->user_id = $this->user->id;
        $history->amount = $this->amount;
        $history->reason = $this->reason;
        $history->save();

        $this->user->decrement('course_balance',$this->amount);

        return to_route('korea.visa.user.list')->with('success',"Balance deducted from {$this->user->name}. Amount : {$this->amount} BDT.");
    }

    #[Title('Deduct Balance')]
    public function render()
    {
        return view('backend.korea.deduct',[
            'histories' => CourseBalanceHistory::whereUserId($this->user->id)->latest()->paginate()
        ]);
    }
}
