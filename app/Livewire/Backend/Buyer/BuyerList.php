<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class BuyerList extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $user = User::findOrFail($id);
        @unlink(public_path($user->buyer?->bank_statement));
        @unlink(public_path($user->buyer?->trade));
        $user->buyer?->delete();
        $user->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Buyer deleted!'
        ]);
    }

    #[Title('Buyer List')]
    public function render()
    {
        return view('backend.buyer.buyer-list',[
            'buyers' => User::with('buyer')->whereHas('buyer',function($query){
                $query->where('status','approved');
            })->whereRole('buyer')->paginate()
        ]);
    }
}
