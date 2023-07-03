<?php

namespace App\Http\Livewire\Front\Katalog;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $detailProduct;
    public $product, $category;

    public function mount ()
    {
        $this->product = Product::with('category')->get();
        $this->category = Category::with('products')->get();
    }
    
    public function render()
    {
        return view('front.katalog.index')->layout('layouts.landing.app')
            ->layoutData([
                'title' => 'Katalog Produk',
            ]);
    }

    // public function getDetailProduct ($slug)
    // {
    //     return redirect()->route('index.katalog.detail', ['slug' => $this->detailProduct->slug]);
    // }
}
