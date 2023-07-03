<?php

namespace App\Http\Livewire\Dashboard\Testimony;

use App\Models\Testimony;
use Livewire\Component;

class Index extends Component
{

    public $testimonyCount;

    protected $listeners = [
        'closeModal' => 'closeModal',
    ];

    public function closeModal()
    {
        session()->forget('success');
    }

    public function mount()
    {
        $this->testimonyCount = Testimony::all()->count();
    }
    
    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.testimony.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Daftar Testimoni',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        return [
            [
                'label' => 'Dashboard',
                'link' => route('dashboard.index'),
            ],
            [
                'label' => 'Testimoni'
            ]
        ];
    }

    
}
