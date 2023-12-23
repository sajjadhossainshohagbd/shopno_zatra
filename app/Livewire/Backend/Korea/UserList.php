<?php

namespace App\Livewire\Backend\Korea;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Url]
    public $search;

    #[Title('User List')]
    public function render()
    {
        $term = "%{$this->search}%";
        return view('backend.korea.user-list',[
            'users' => User::when($this->search, function ($query) use ($term) {
                $query->where(function ($subQuery) use ($term) {
                    $subQuery->where('name', 'LIKE', $term)
                        ->orWhere('phone', 'LIKE', $term)
                        ->orWhere('email', 'LIKE', $term);
                });
            })->where('role','user')->paginate()
        ]);
    }
}
