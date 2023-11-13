<?php

namespace App\Livewire\Frontend\User;

use App\Models\BalanceCostHistory as Model;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('frontend.layouts.app')]
class BalanceCostHistory extends Component
{
    use WithPagination;

    #[Title('Balance Cost History')]
    public function render()
    {
        return view('frontend.user.balance-cost-history',[
            'histories' => Model::own()->latest()->paginate()
        ]);
    }
}
