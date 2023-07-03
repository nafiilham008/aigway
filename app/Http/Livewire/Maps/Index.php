<?php

namespace App\Http\Livewire\Maps;

use App\Models\Reseller;
use Livewire\Component;

class Index extends Component
{

    public $longitude = [];
    public $latitude = [];

    public function mount ()
    {
        $this->getReseller();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('maps.index', compact('breadcrumb'))
            ->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Pemetaan',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        return [
            [
                'label' => 'Home',
                'link' => route('index'),
            ],
            [
                'label' => 'Test'
            ]
        ];
    }

    public function getReseller ()
    {
        $resellers = Reseller::all();

        foreach ($resellers as $reseller) {
            $this->longitude[] = $reseller->longitude;
            $this->latitude[] = $reseller->latitude;
        }
    }
}
