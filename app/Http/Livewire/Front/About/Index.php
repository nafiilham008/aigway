<?php

namespace App\Http\Livewire\Front\About;

use App\Models\Reseller;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $dataUser;
    public $reseller;
    public $longitude = [];
    public $latitude = [];

    public function mount()
    {
        $this->getReseller();
        $this->getDataUser();

    }

    public function render()
    {
        return view('front.about.index')->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Tentang Kami',
            ]);
    }

    public function getReseller()
    {
        $resellers = Reseller::all();

        $this->reseller = $resellers;
        foreach ($resellers as $reseller) {
            $this->longitude[] = $reseller->longitude;
            $this->latitude[] = $reseller->latitude;
        }
    }

    public function getDataUser()
    {
        $this->dataUser = User::findOrFail(1);

        $this->longitude[] = (float) $this->dataUser->longitude;
        $this->latitude[] = (float) $this->dataUser->latitude;
    }

    public function coordinateSelected($latitude, $longitude)
    {
        // $this->selectedLatitude = $latitude;
        // $this->selectedLongitude = $longitude;
        $this->latitude[] = $latitude;
        $this->longitude[] = $longitude;
    }
}
