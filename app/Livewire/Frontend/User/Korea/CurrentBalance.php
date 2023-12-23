<?php

namespace App\Livewire\Frontend\User\Korea;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\CourseBalanceHistory;

#[Layout('frontend.layouts.app')]
class CurrentBalance extends Component
{
    use WithPagination;

    #[Title('Current Balance & History')]
    public function render()
    {
        return view('frontend.user.korea.current-balance',[
            'histories' => CourseBalanceHistory::own()->latest()->paginate()
        ]);
    }
}
