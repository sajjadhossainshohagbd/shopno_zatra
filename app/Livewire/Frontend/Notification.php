<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Notification extends Component
{
    public function mount()
    {
        auth()->user()?->unreadNotifications?->markAsRead();
    }

    #[Title('Notifications')]
    public function render()
    {
        return view('frontend.notification');
    }
}
