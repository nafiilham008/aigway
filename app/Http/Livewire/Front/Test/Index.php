<?php

namespace App\Http\Livewire\Front\Test;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public $recipientEmail;

    public function render()
    {
        return view('front.test.index')->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Test Email',
            ]);
    }
    

    public function sendTestEmail()
    {
        // dd($this->recipientEmail);
        Mail::to($this->recipientEmail)->send(new TestEmail());

        session()->flash('message', "Test email sent to $this->recipientEmail");
    }
}
