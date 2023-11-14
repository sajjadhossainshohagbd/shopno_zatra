<?php

namespace App\Livewire\Backend\BalanceRequest;

use App\Models\BalanceRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $type;

    public function mount()
    {
        $this->type = request('type');
    }

    #[Title('Balance Request')]
    public function render()
    {
        return view('backend.balance-request.index',[
            'requests' => BalanceRequest::with('user')->when($this->type,function($query){
                $query->where('status',$this->type);
            })->latest()->paginate()
        ]);
    }
}
