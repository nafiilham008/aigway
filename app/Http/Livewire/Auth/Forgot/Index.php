<?php

namespace App\Http\Livewire\Auth\Forgot;

use App\Mail\ResetPasswordConfirmationMail;
use App\Mail\TestEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public $recipientEmail;
    public $token;

    public function render()
    {
        return view('auth.forgot.index')->layout('layouts.auth.app')->layoutData([
            'title' => 'Lupa Kata Sandi'
        ]);
    }


    public function sendEmail()
    {
        $user = User::where('email', $this->recipientEmail)->first();

        if (!$user) {
            // session()->flash('error', "User not found.");
            return redirect()->route('forgot')->with('error', "Email tidak ditemukan");
        }

        $token = $user->generatePasswordResetToken();

        $resetUrl = route('confirmation', ['token' => $token]);

        Mail::to($this->recipientEmail)->send(new ResetPasswordConfirmationMail($resetUrl));

        return redirect()->route('login')->with('success', "Silakan cek email anda");
    }
}
