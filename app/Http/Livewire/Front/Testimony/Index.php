<?php

namespace App\Http\Livewire\Front\Testimony;

use App\Models\Testimony;
use Livewire\Component;

class Index extends Component
{

    public $testimony;

    public function mount()
    {
        $this->getTestimony();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('front.testimony.index', compact('breadcrumb'))
            ->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Testimoni',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        return [
            [
                'label' => 'Tentang Kami',
                'link' => route('index.about'),
            ],
            [
                'label' => 'Testimoni'
            ]
        ];
    }
    public function getTestimony()
    {
        $this->testimony = Testimony::all();
    }
}
