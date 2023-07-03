<?php

namespace App\Http\Livewire\Dashboard\Product;

use App\Models\Product;
use Livewire\Component;

class Detail extends Component
{
    public $dataProduct;

    public function mount($productId)
    {
        $getDataProduct = Product::with('category')->findOrFail($productId);
        $getDataProduct->photo = json_decode($getDataProduct->photo, true);
        $this->dataProduct = $getDataProduct;


        // dd($this->dataProduct->category);

        // dd($this->dataProduct->benefits);
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.product.detail', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Produk',
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
                'label' => 'Produk',
                'link' => route('dashboard.product.index'),
            ],
            [
                'label' => 'Detail',
            ]
        ];
    }
}
