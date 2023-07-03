<?php

namespace App\Http\Livewire\Front\Katalog;

use App\Models\Product;
use Livewire\Component;

class Detail extends Component
{

    public $detailProduct;
    public $slug;

    public function mount($slug = null)
    {
        $this->slug = $slug;

        $this->getData();

        if (!$this->isVisitorIncremented()) {
            $this->incrementVisitors();
        }
    }

    public function incrementVisitors()
    {
        $visitor = Product::with('category')->where('slug', $this->slug)->first();

        $visitor->visitors += 1;
        $visitor->save();

        session()->put('visitor_incremented', true);
    }

    public function isVisitorIncremented()
    {
        return session()->has('visitor_incremented');
    }

    public function getData()
    {
        $detailProductGet = Product::with('category')->where('slug', $this->slug)->first();

        $detailProductGet->photo = json_decode($detailProductGet->photo, true);
        $this->detailProduct = $detailProductGet;
    }

    public function render()
    {
        return view('front.katalog.detail')->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Detail Produk',
            ]);
    }
}
