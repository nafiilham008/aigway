<?php

namespace App\Http\Livewire\Dashboard\Banner;

use App\Models\Banner;
use Livewire\Component;

class Index extends Component
{

    public $bannerCount;

    public function mount()
    {
        $this->bannerCount = Banner::all()->count();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.banner.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Daftar Banner',
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
                'label' => 'Banner',
            ]
        ];
    }
}
