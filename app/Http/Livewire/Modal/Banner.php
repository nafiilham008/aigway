<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Banner extends Component
{
    public $banner;
    public $modalOpen = false;


    public function mount($banner)
    {
        $this->banner = $banner;

        if ($this->banner && $this->banner->status == true) {
            $this->modalOpen = true;
        } else {
            $this->modalOpen = false;
        }
    }

    public function modalClose()
    {
        $this->modalOpen = false;
    }

    public function render()
    {
        return view('modal.banner');
    }
}
