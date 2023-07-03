<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;

    public function mount()
    {
        $this->email = '';
        $this->password = '';
        $this->remember = false;
    }

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Kolom email harus diisi.',
            'password.required' => 'Kolom password harus diisi.',
        ]);
        

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->route('dashboard.index');
        }

        session()->flash('error', 'Data tidak ditemukan!');

        // Redirect back to the login page
        return redirect()->route('login');
    }



    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth.app')->layoutData([
            'title' => 'Login'
        ]);
    }
}
