<?php

namespace App\Http\Livewire\Dashboard\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $productCount;


    public function closeModal()
    {
        session()->forget('success');
    }

    public function mount()
    {
        $this->productCount = Product::all()->count();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.product.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Daftar Produk',
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
                'label' => 'Produk'
            ]
        ];
    }
}
