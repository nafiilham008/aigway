<?php

namespace App\Http\Livewire\Sidebar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['confirm' => 'confirmLogout'];

    public function logout()
    {
        $this->dispatchBrowserEvent('confirm-logout');
    }

    public function confirmLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.sidebar.index');
    }
}
