<?php

namespace App\Livewire\Frontend;

use App\Mail\ContactUs as ContactMail;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;

#[Layout('frontend.layouts.app')]
class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public  function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email:filter',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($validated));
            return to_route('contact.us')->with('success','Thanks for contacting us.');
        } catch (\Throwable $th) {
            return to_route('contact.us')->with('error','Sorry, something went wrong!');
        }
    }
    #[Title('Contact Us')]
    public function render()
    {
        return view('frontend.contact-us');
    }
}
