<?php

namespace App\Livewire\Frontend\User;

use App\Models\Worker;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;

#[Layout('frontend.layouts.app')]
class WorkerProfile extends Component
{
    public $language;
    public $skill;
    public $contact_phone;
    public $experience;
    public $about;

    #[Locked]
    public $worker;

    public function mount()
    {
        $this->worker = Worker::firstOrNew([
                            'user_id' => auth()->id()
                        ]);

        $this->language = $this->worker->language;
        $this->skill = $this->worker->skill;
        $this->contact_phone = $this->worker->contact_phone;
        $this->experience = $this->worker->experience;
        $this->about = $this->worker->about;
    }

    public function submit()
    {
        $this->validate([
            'language' => 'required',
            'skill' => 'nullable',
            'contact_phone' => 'required|min:11|max:11',
            'experience' => 'nullable',
            'about' => 'required'
        ]);

        $worker = $this->worker;
        $worker->user_id = auth()->id();
        $worker->language = $this->language;
        $worker->skill = $this->skill;
        $worker->contact_phone = $this->contact_phone;
        $worker->experience = $this->experience;
        $worker->about = $this->about;
        $worker->isDirty() ? $worker->status = 'pending' : '';
        $worker->save();

        auth()->user()->update([
            'role' => 'worker'
        ]);

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Worker request sent successfully!'
        ]);
    }

    #[Title('Worker Profile')]
    public function render()
    {
        return view('frontend.user.worker-profile');
    }
}
