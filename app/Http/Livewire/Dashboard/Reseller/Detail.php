<?php

namespace App\Http\Livewire\Dashboard\Reseller;

use App\Models\Dashboard\Reseller;
use App\Models\Reseller as ModelsReseller;
use Livewire\Component;

class Detail extends Component
{

    public $dataReseller;

    public $latitude;
    public $longitude;

    public function mount($resellerId = null)
    {
        $this->detailReseller($resellerId);
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.reseller.detail', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Detail Reseller',
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
                'label' => 'Reseller',
                'link' => route('dashboard.reseller.index'),
            ],
            [
                'label' => 'Detail Reseller'
            ]
        ];
    }

    public function detailReseller($selectedReseller)
    {
        $this->dataReseller = ModelsReseller::findOrFail($selectedReseller);
        $this->latitude = $this->dataReseller->latitude;
        $this->longitude = $this->dataReseller->longitude;
    }
}
