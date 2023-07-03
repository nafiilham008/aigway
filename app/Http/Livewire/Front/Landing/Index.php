<?php

namespace App\Http\Livewire\Front\Landing;

use App\Models\Banner;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $product;
    public $banner;

    public function mount ()
    {
        $this->product = Product::with('category')->get();

        $this->checkBannerStatus();
        
    }

    public function checkBannerStatus ()
    {
        $this->banner = Banner::where('status', true)->first();

        // dd($this->banner);
    }

    public function render()
    {
        return view('front.landing.index')->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Aigway Official',
            ]);
    }
}
