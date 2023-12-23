<?php

namespace App\Livewire\Backend\Buyer;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

class FindWorker extends Component
{
    #[Title('Find Worker')]
    public function render()
    {
        return view('backend.buyer.find-worker',[
            'workers' => User::whereRole('worker')->with('worker')->whereHas('worker',function($query){
                $query->where('status','approved');
            })->paginate()
        ]);
    }
}
